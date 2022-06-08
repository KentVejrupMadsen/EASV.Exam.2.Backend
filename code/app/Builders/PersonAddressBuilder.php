<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Builders;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\tables\User;


    /**
     *
     */
    class PersonAddressBuilder
    {
        public function __construct()
        {

        }

        // Variables
        private static ?AccountBuilder $singleton =  null;

        /**
         * @return AccountBuilder|null
         */
        public static function getSingleton(): ?AccountBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new AccountBuilder() );
            }

            return self::$singleton;
        }

        /**
         * @param AccountBuilder|null $singleton
         */
        public static function setSingleton( ?AccountBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>