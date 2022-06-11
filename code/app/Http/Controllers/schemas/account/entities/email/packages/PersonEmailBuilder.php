<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\email\packages;

    use App\Models\tables\AccountEmailModel;
    use App\Http\Controllers\templates\Builder;


    /**
     *
     */
    class PersonEmailBuilder
        extends Builder
    {
        /**
         *
         */
        public function __construct()
        {

        }

        /**
         * @param string $email
         * @return AccountEmailModel|null
         */
        public final function retrieveEmail( string $email ): ?AccountEmailModel
        {
            $model = AccountEmailModel::where( 'content', $email )->first();
            return $model;
        }

        /**
         * @param string $email
         * @return bool|null
         */
        public final function hasEmailContainer( string $email ): ?bool
        {
            $retVal = false;

            $model = AccountEmailModel::where( 'content', $email )->first();

            if( isset( $model ) )
            {
                $retVal = true;
            }

            return $retVal;
        }

        /**
         * @param string $email
         * @return AccountEmailModel|null
         */
        public final function createEmail( string $email ): ?AccountEmailModel
        {
            return AccountEmailModel::factory()->create( [ 'content' => $email ] );
        }



        // Variables
        private static ?PersonEmailBuilder $singleton =  null;

        /**
         * @return PersonEmailBuilder|null
         */
        public static function getSingleton(): ?PersonEmailBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton( new PersonEmailBuilder() );
            }

            return self::$singleton;
        }

        /**
         * @param PersonEmailBuilder|null $singleton
         * @return void
         */
        public static function setSingleton( ?PersonEmailBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>