<?php
    namespace App\Http\Controllers\cacheControllers\security;

    use App\Http\Controllers\Controller;
    use App\Models\security\CSRFModel;
    use Illuminate\Support\Facades\Redis;
    use Illuminate\Support\Str;


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
            $cached = Redis::get( $this->redisStrKey( $model->id ) );
            return $cached;
        }

        public final function create( ?CSRFModel $model ): void
        {
            Redis::set( $this->redisStrKey( $model->id ), $model );
        }


        public final function update( ?CSRFModel $model ): void
        {
            $key = $this->redisStrKey( $model->id );

            Redis::del( $key );
            Redis::set( $key, $model );
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
        private static $controller = null;

        /**
         * @return RedisCacheCSRFController
         */
        public static function getSingleton()
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
        private static function setSingleton( RedisCacheCSRFController $controller )
        {
            self::$controller = $controller;
        }
    }
?>