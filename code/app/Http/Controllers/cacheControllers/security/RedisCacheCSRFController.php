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

    // Internal libraries
    use App\Http\Controllers\Controller;
    use App\Models\security\CSRFModel;


    /**
     *
     */
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


        public final function select( ?CSRFModel $model ): ?CSRFModel
        {
            $cached = $this->selectById( $model->id );
            return $cached;
        }

        public final function selectById( int $id ): ?CSRFModel
        {
            $cached = Redis::get( $this->redisStrKey( $id ) );

            if( isset( $cached ) )
            {
                return $this->decodeJSON( $cached );
            }

            return null;
        }

        protected function decodeJSON( string $values ): ?CSRFModel
        {
            $jsonValues = json_decode( $values, true );

            if( !isset( $jsonValues ) )
            {
                return null;
            }

            $cachedModel = new CSRFModel();

            $cachedModel->id            = $jsonValues['csrf']['id'];
            $cachedModel->assigned_to   = $jsonValues['csrf']['assigned_to'];
            $cachedModel->secure_token  = $jsonValues['csrf']['secure_token'];
            $cachedModel->secret_token  = $jsonValues['csrf']['secret_token'];
            $cachedModel->issued        = $jsonValues['csrf']['issued'];
            $cachedModel->accessed      = $jsonValues['csrf']['accessed'];
            $cachedModel->activated     = $jsonValues['csrf']['activated'];
            $cachedModel->invalidated   = $jsonValues['csrf']['invalidated'];

            return $cachedModel;
        }

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

        public final function create( ?CSRFModel $model,
                                      bool $full = true ): void
        {
            if( $full )
            {
                Redis::set( $this->redisStrKey( $model->id ), json_encode( $this->cacheCompleteModel( $model ) ) );
            }
        }


        public final function update( ?CSRFModel $model, bool $full = true ): void
        {
            $key = $this->redisStrKey( $model->id );

            Redis::del( $key );
            $this->create( $model, $full );
        }


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