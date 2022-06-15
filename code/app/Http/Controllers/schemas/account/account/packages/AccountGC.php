<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\account\packages;

    use App\Http\Controllers\templates\Truncator;
    use App\Models\tables\User;

    use Illuminate\Support\Facades\Hash;


    /**
     *  Manages the deletion of entities and specific elements.
     */
    class AccountGC
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
        private static ?AccountGC $singleton =  null;


        // Accessors
            // getters
        /**
         * @return AccountGC|null
         */
        public static function getSingleton(): ?AccountGC
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new AccountGC()
                );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param AccountGC|null $singleton
         */
        public static function setSingleton( ?AccountGC $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>