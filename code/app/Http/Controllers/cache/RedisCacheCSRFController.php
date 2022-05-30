<?php
    namespace App\Http\Controllers\cache;

    use App\Http\Controllers\Controller;


    /**
     *
     */
    class RedisCacheCSRFController
        extends Controller
    {
        public function create()
        {

        }

        public function get()
        {

        }

        public function update()
        {

        }

        public function delete()
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