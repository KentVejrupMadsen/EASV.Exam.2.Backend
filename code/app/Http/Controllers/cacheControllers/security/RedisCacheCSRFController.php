<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\cacheControllers\security;

    // External libraries
    use Illuminate\Support\Facades\Redis;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\Controller;
    use App\Models\security\CSRFModel;


    /**
     *
     */
    #[OA\Schema()]
    class RedisCacheCSRFController
        extends Controller
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        /**
         * @param CSRFModel|null $model
         * @return CSRFModel|null
         */
        public final function select( ?CSRFModel $model ): ?CSRFModel
        {
            $cached = $this->selectById( $model->id );
            return $cached;
        }


        /**
         * @param int $id
         * @return CSRFModel|null
         */
        public final function selectById( int $id ): ?CSRFModel
        {
            $cached = Redis::get( $this->redisStrKey( $id ) );

            if( isset( $cached ) )
            {
                return $this->decodeJSON( $cached );
            }

            return null;
        }


        /**
         * @param string $values
         * @return CSRFModel|null
         */
        protected function decodeJSON( string $values ): ?CSRFModel
        {
            $jsonValues = json_decode( $values, true );

            if( !isset( $jsonValues ) )
            {
                return null;
            }

            if( $jsonValues[ 'cache_type' ] == 'complete' )
            {
                $cachedModel = $this->decodeJSONComplete( $jsonValues[ 'csrf' ] );
            }

            if( $jsonValues[ 'cache_type' ] == 'secure' )
            {
                $cachedModel = $this->decodeJSONComplete( $jsonValues[ 'csrf' ] );
            }

            return $cachedModel;
        }


        /**
         * @param array $array
         * @return CSRFModel
         */
        private function decodeJSONComplete( array $array ): CSRFModel
        {
            $cachedModel = $this->decodeJSONMinimum( $array );

            $cachedModel->accessed      = $array[ 'accessed' ];
            $cachedModel->activated     = $array[ 'activated' ];
            $cachedModel->invalidated   = $array[ 'invalidated' ];

            return $cachedModel;
        }


        /**
         * @param array $array
         * @return CSRFModel
         */
        private function decodeJSONMinimum( array $array ): CSRFModel
        {
            $cachedModel = new CSRFModel();

            $cachedModel->id            = $array[ 'id' ];
            $cachedModel->assigned_to   = $array[ 'assigned_to' ];
            $cachedModel->secure_token  = $array[ 'secure_token' ];
            $cachedModel->secret_token  = $array[ 'secret_token' ];
            $cachedModel->issued        = $array[ 'issued' ];

            return$cachedModel;
        }

        /**
         * @param CSRFModel $cachedModel
         * @return array
         */
        protected final function cacheCompleteModel( CSRFModel $cachedModel ): array
        {
            return
            [
                'csrf' =>
                [
                    'id'            => $cachedModel->id,
                    'assigned_to'   => $cachedModel->assigned_to,
                    'secure_token'  => $cachedModel->secure_token,
                    'secret_token'  => $cachedModel->secret_token,
                    'issued'        => $cachedModel->issued,
                    'accessed'      => $cachedModel->accessed,
                    'activated'     => $cachedModel->activated,
                    'invalidated'   => $cachedModel->invalidated,
                ],
                'cache_type' => 'complete'
            ];
        }


        /**
         * @param CSRFModel $cachedModel
         * @return array
         */
        protected final function cacheSecurity( CSRFModel $cachedModel ): array
        {
            return
                [
                    'csrf' =>
                    [
                        'id'            => $cachedModel->id,
                        'assigned_to'   => $cachedModel->assigned_to,
                        'secure_token'  => $cachedModel->secure_token,
                        'secret_token'  => $cachedModel->secret_token,
                        'issued'        => $cachedModel->issued,
                    ],
                    'cache_type' => 'secure'
                ];
        }


        /**
         * @param CSRFModel|null $model
         * @param bool $full
         * @return void
         */
        public final function create( ?CSRFModel $model,
                                      bool $full = true ): void
        {
            if( $full )
            {
                Redis::set( $this->redisStrKey( $model->id ),
                            json_encode( $this->cacheCompleteModel( $model ) ) );
            }
            else
            {
                Redis::set( $this->redisStrKey( $model->id ),
                            json_encode( $this->cacheSecurity( $model ) ) );
            }

        }


        /**
         * @param CSRFModel|null $model
         * @param bool $full
         * @return void
         */
        public final function update( ?CSRFModel $model, bool $full = true ): void
        {
            $key = $this->redisStrKey( $model->id );

            Redis::del( $key );
            $this->create( $model, $full );
        }


        /**
         * @param CSRFModel|null $model
         * @return void
         */
        public final function delete( ?CSRFModel $model ): void
        {
            Redis::del( $this->redisStrKey( $model->id ) );
        }


        /**
         * @param int $id
         * @return string
         */
        protected final function redisStrKey( int $id ): string
        {
            return Str::lower( '_csrf_api_token__' . $id );
        }


        // Singleton
        private static RedisCacheCSRFController|null $controller = null;

        /**
         * @return RedisCacheCSRFController
         */
        public static function getSingleton(): RedisCacheCSRFController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new RedisCacheCSRFController() );
            }

            return self::$controller;
        }

        /**
         * @param RedisCacheCSRFController $controller
         * @return void
         */
        private static function setSingleton( RedisCacheCSRFController $controller ): void
        {
            self::$controller = $controller;
        }
    }
?>