<?php
    namespace App\Factory;

    class SecurityCSRFConstructor
    {
        public function __construct()
        {

        }

        // Variables
        private static $factory = null;

        // Accessors
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
        protected final static function setFactory(SecurityCSRFConstructor $factory ): void
        {
            self::$factory = $factory;
        }
    }
?>