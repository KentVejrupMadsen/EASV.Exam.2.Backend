<?php
    namespace App\Factory;

    use App\Models\security\CSRFModel;
    use Carbon\Carbon;
    use Illuminate\Support\Str;


    class SecurityCSRFConstructor
    {
        public function __construct()
        {

        }

        // Variables
        private int $tokenDefaultLength = 64;
        private static $factory = null;

        // Code
        public function constructNewModel( string $ip ): CSRFModel
        {
            $input = self::generateInputArray( $ip, $this->getDefaultLength() );
            return self::makeModel( $input );
        }

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

        //
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

        protected static function generateInputArray( string $ipAssignedTo, int $randomTokenSize ): ?array
        {
            return
            [
                'assigned_to' => $ipAssignedTo,
                'secure_token' => self::generateRandomToken( $randomTokenSize ),
                'secret_token' => self::generateRandomToken( $randomTokenSize ),
                'activated' => false,
                'invalidated' => false
            ];
        }

        protected static function makeModel( array $inputs ): ?CSRFModel
        {
            $model = CSRFModel::create( $inputs );
            return $model;
        }


        // Accessors
        public final function getDefaultLength(): int
        {
            return $this->tokenDefaultLength;
        }

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