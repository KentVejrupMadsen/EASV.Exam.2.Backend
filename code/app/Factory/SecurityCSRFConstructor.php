<?php
    namespace App\Factory;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\security\CSRFModel;
    use JetBrains\PhpStorm\ArrayShape;


    class SecurityCSRFConstructor
    {
        public function __construct()
        {

        }

        // Variables
        private int $tokenDefaultLength = 64;
        private static $factory = null;

        // Code
        /**
         * @param string $ip
         * @return CSRFModel
         */
        public function constructNewModel( string $ip ): CSRFModel
        {
            $input = self::generateInputArray( $ip, $this->getDefaultLength() );

            return self::makeModel( $input );
        }


        /**
         * @param CSRFModel $model
         * @param Carbon|null $time
         * @return CSRFModel
         */
        public function appendIssued( CSRFModel &$model, ?Carbon $time = null ): CSRFModel
        {
            if( is_null( $time ) )
            {
                $model->issued = Carbon::now();
            }
            else
            {
                $model->issued = $time;
            }
            return $model;
        }


        /**
         * @param CSRFModel $model
         * @param Carbon|null $time
         * @return CSRFModel
         */
        public function appendAccessed( CSRFModel &$model, ?Carbon $time = null ): CSRFModel
        {
            if( is_null( $time ) )
            {
                $model->accessed = Carbon::now();
            }
            else
            {
                $model->accessed = $time;
            }
            return $model;
        }


        /**
         * @param CSRFModel $model
         * @param bool $shouldSave
         * @return CSRFModel
         */
        public function executeInvalidateModel( CSRFModel &$model, bool $shouldSave = true ): CSRFModel
        {
            $model->invalidated = true;

            if( $shouldSave )
            {
                $model->save();
            }

            return $model;
        }


        /**
         * @param CSRFModel $model
         * @param bool $shouldSave
         * @return CSRFModel
         */
        public function executeActivateModel( CSRFModel &$model, bool $shouldSave = true ): CSRFModel
        {
            $this->appendIssued( $model );
            $model->activated = true;

            if( $shouldSave )
            {
                $model->save();
            }

            return $model;
        }


        /**
         * @param CSRFModel $model
         * @param bool $shouldSave
         * @return CSRFModel
         */
        public function executeResetModel( CSRFModel &$model, bool $shouldSave = true ): CSRFModel
        {
            $model->secure_token = self::generateRandomToken( $this->getDefaultLength() );
            $model->secret_token = self::generateRandomToken( $this->getDefaultLength() );

            if( $shouldSave )
            {
                $model->save();
            }
            return $model;
        }


        /**
         * @param int $id
         * @return CSRFModel
         */
        public function findById( int $id ): CSRFModel
        {
            $model = CSRFModel::where( 'id', '=', $id )->firstOrFail();
            return $model;
        }


        /**
         * @param string $ipAddress
         * @param string $secure_token
         * @param string $secret_token
         * @return CSRFModel
         */
        public function findByContent( string $ipAddress,
                                       string $secure_token,
                                       string $secret_token ): CSRFModel
        {
            $model = CSRFModel::where(
                [
                    [ 'assigned_to', '=', $ipAddress ],
                    [ 'secure_token', '=', $secure_token ],
                    [ 'secret_token', '=', $secret_token ]
                ]
            )->firstOrFail();

            return $model;
        }


        /**
         * @param string $ipAddress
         * @return array
         */
        public final function allByIpAddress( string $ipAddress ): array
        {
            $models = CSRFModel::where( 'assigned_to', '=', $ipAddress )->get()->toArray();
            return $models;
        }


        /**
         * @param CSRFModel $model
         * @return void
         */
        public final function deleteModel( CSRFModel &$model ): void
        {
            $model->delete();
        }


        /**
         * @param int $id
         * @return void
         */
        public final function deleteById( int $id ): void
        {
            CSRFModel::destroy( $id );
        }


        /**
         * @param string $ip
         * @param bool $all
         * @return void
         */
        public final function deleteByIpAddress( string $ip, bool $all = true ): void
        {
            $associatedIPs = CSRFModel::where( 'assigned_to', '=', $ip )->get()->toArray();

            for( $idx = 0;
                 $idx < count( $associatedIPs );
                 $idx++ )
            {
                $current = $associatedIPs[$idx];

                if( $all )
                {
                    $current->delete();
                }
                else
                {
                    if( $current->invalidated )
                    {
                        $current->delete();
                    }
                }
            }
        }


        /**
         * @return void
         */
        public final function clearDatabase(): void
        {
            CSRFModel::truncate();
        }


        //
        /**
         * @param int $stringLength
         * @param bool $normalised
         * @return string
         */
        protected static function generateRandomToken( int $stringLength, bool $normalised = false )
        {
            $generatedValue = Str::random( $stringLength );

            if( $normalised )
            {
                return Str::lower( $generatedValue );
            }
            else
            {
                return $generatedValue;
            }
        }


        /**
         * @param string $ipAssignedTo
         * @param int $randomTokenSize
         * @return array|null
         */
        #[ArrayShape(['assigned_to' => "string", 'secure_token' => "string", 'secret_token' => "string", 'issued' => "\Carbon\Carbon", 'activated' => "false", 'invalidated' => "false"])]
        protected static function generateInputArray(string $ipAssignedTo, int $randomTokenSize ): ?array
        {
            return
            [
                'assigned_to' => $ipAssignedTo,
                'secure_token' => self::generateRandomToken( $randomTokenSize ),
                'secret_token' => self::generateRandomToken( $randomTokenSize ),
                'issued' => Carbon::now(),
                'activated' => false,
                'invalidated' => false
            ];
        }


        /**
         * @param array $inputs
         * @return CSRFModel|null
         */
        protected static function makeModel( array $inputs ): ?CSRFModel
        {
            $model = CSRFModel::create( $inputs );
            return $model;
        }


        // Accessors
        /**
         * @return int
         */
        public final function getDefaultLength(): int
        {
            return $this->tokenDefaultLength;
        }

        /**
         * @param int $value
         * @return void
         */
        public final function setDefaultLength( int $value ): void
        {
            $this->tokenDefaultLength = $value;
        }

        /**
         * @return SecurityCSRFConstructor
         */
        public final static function getFactory(): SecurityCSRFConstructor
        {
            if( is_null( self::$factory ) )
            {
                self::setFactory( new SecurityCSRFConstructor() );
            }

            return self::$factory;
        }

        /**
         * @param SecurityCSRFConstructor $factory
         * @return void
         */
        protected final static function setFactory( SecurityCSRFConstructor $factory ): void
        {
            self::$factory = $factory;
        }
    }
?>