<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */


    use App\Http\Controllers\templates\Truncator;


    /**
     *
     */
    class SecurityCSRFGC
        extends Truncator
    {
        /**
         *
         */
        public function __construct()
        {

        }


        /**
         * @param array $array
         * @return bool
         */
        public final function removal( array $array ): bool
        {

            return false;
        }


        /**
         * @param array $array
         * @return bool
         */
        public final function removalOfModels( array $array ): bool
        {

            return false;
        }


        // Variables
        private static ?SecurityCSRFGC $factory = null;



        /**
         * @return SecurityCSRFGC
         */
        public final static function getFactory(): SecurityCSRFGC
        {
            if( is_null( self::$factory ) )
            {
                self::setFactory( new SecurityCSRFGC() );
            }

            return self::$factory;
        }

        /**
         * @param SecurityCSRFGC $factory
         * @return void
         */
        protected final static function setFactory( SecurityCSRFGC $factory ): void
        {
            self::$factory = $factory;
        }
    }
?>