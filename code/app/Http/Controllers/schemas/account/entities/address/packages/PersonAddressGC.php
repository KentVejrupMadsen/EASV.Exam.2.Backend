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



        // Variables
        private static ?PersonAddressGC $singleton =  null;


        // Accessors
            // getters
        /**
         * @return PersonAddressGC|null
         */
        public static function getSingleton(): ?PersonAddressGC
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
         * @param PersonAddressGC|null $singleton
         */
        public static function setSingleton( ?PersonAddressGC $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>