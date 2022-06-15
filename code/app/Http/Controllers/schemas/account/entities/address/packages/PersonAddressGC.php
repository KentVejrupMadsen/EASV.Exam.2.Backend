<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\address\packages;

    use App\Http\Controllers\templates\Truncator;
    use App\Models\tables\User;

    use Illuminate\Support\Facades\Hash;


    /**
     *  Manages the deletion of entities and specific elements.
     */
    class PersonAddressGC
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
        public final function removalOfModels(array $array): bool
        {
            return false;
        }


        // Variables
        private static ?PersonAddressGC $singleton =  null;


        // Accessors
            // getters
        /**
         * @return PersonAddressGC
         */
        public static final function getSingleton(): PersonAddressGC
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonAddressGC()
                );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param PersonAddressGC $singleton
         * @return void
         */
        protected static final function setSingleton( PersonAddressGC $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>