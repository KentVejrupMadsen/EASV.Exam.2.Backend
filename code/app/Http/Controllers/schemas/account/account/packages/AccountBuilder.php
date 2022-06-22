<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\schemas\account\account\packages;

    use App\Models\tables\User;
    use App\Http\Controllers\templates\Builder;

    use Illuminate\Support\Facades\Hash;


    /**
     *
     */
    class AccountBuilder
        extends Builder
    {
        /**
         *
         */
        public function __construct()
        {

        }


        // Variables
        private static ?AccountBuilder $singleton =  null;


        /**
         * @param array $input
         * @return mixed
         */
        public final function templateModel( array $input ): mixed
        {

            return null;
        }


        /**
         * @param array $input
         * @return mixed
         */
        public final function createModel( array $input ): mixed
        {

            return null;
        }


        /**
         * @param array $array
         * @return void
         */
        public final function creationOfModels( array $array ): void
        {

        }


        /**
         * @param array $array
         * @return void
         */
        public final function templateModels( array $array ): void
        {

        }


        /**
         * @return array|null
         */
        public final function retrieveOutputResults(): ?array
        {

            return null;
        }


        /**
         * @return User|null
         */
        public final function retrieveSingular(): ?User
        {

            return null;
        }


        // Accessors
            // getters
        /**
         * @return AccountBuilder
         */
        public static final function getSingleton(): AccountBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new AccountBuilder()
                );
            }

            return self::$singleton;
        }

            // setters
        /**
         * @param AccountBuilder $singleton
         * @return void
         */
        protected static final function setSingleton( AccountBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
