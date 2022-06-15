<?php
    /**
     *
     */
    namespace App\Http\Controllers\schemas\account\account\packages;

    //
    use App\Http\Controllers\templates\States;


    /**
     *
     */
    class AccountStates
        extends States
    {

        // Variables
        private static ?AccountStates $singleton = null;


        // Accessors
        /**
         * @return AccountStates
         */
        public static final function getSingleton(): AccountStates
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new AccountStates()
                );
            }

            return self::$singleton;
        }


        /**
         * @param AccountStates $singleton
         * @return void
         */
        protected static final function setSingleton( AccountStates $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>