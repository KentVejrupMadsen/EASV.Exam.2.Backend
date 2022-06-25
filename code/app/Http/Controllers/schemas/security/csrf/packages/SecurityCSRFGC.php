<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
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


        // Variables
        private static ?SecurityCSRFGC $factory = null;


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


        /**
         * @return bool
         */
        public final function removeByIds(): bool
        {
            return false;
        }

        /**
         * @return bool
         */
        public final function removeById(): bool
        {
            return false;
        }


        // Accessors
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
