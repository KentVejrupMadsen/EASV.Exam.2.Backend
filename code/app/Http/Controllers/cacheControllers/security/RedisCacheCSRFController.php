<?php
    namespace App\Http\Controllers\cacheControllers\security;

    use App\Http\Controllers\Controller;
    use App\Models\security\CSRFModel;
    use Illuminate\Support\Facades\Redis;


    /**
     *
     */
    class RedisCacheCSRFController
        extends Controller
    {
        public final function __construct()
        {

        }


        public function isAvailable(): bool
        {
            return Redis::connection()->ping();
        }


        public function create( $id, CSRFModel $model )
        {
            Redis::set();
        }

        public function createByModel( CSRFModel $model )
        {

        }

        public function get( int $id )
        {

        }

        public function update()
        {

        }

        public function updateByModel( CSRFModel $model )
        {

        }

        public function delete()
        {

        }

        public function deleteByModel( CSRFModel $model )
        {

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