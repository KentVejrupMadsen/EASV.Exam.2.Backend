<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */

    use App\Models\security\CSRFModel;
    use App\Http\Controllers\templates\Builder;
    use Carbon\Carbon;
    use Illuminate\Support\Str;


    /**
     *
     */
    class SecurityCSRFBuilder
        extends Builder
    {
        /**
         *
         */
        public function __construct()
        {

        }

        public function templateModel( array $input ): mixed
        {

            return null;
        }

        public function createModel( array $input ): mixed
        {

            return null;
        }

        public function creationOfModels( array $array ): void
        {
            // TODO: Implement creationOfModels() method.
        }

        public function templateModels( array $array ): void
        {
            // TODO: Implement templateModels() method.
        }

        public function retrieveOutputResults(): ?array
        {
            // TODO: Implement retrieveOutputResults() method.
            return null;
        }


        // Variables
        private int $tokenDefaultLength = 64;
        private static ?SecurityCSRFBuilder $factory = null;


        /**
         * @return SecurityCSRFBuilder
         */
        public final static function getFactory(): SecurityCSRFBuilder
        {
            if( is_null( self::$factory ) )
            {
                self::setFactory( new SecurityCSRFBuilder() );
            }

            return self::$factory;
        }

        /**
         * @param SecurityCSRFBuilder $factory
         * @return void
         */
        protected final static function setFactory( SecurityCSRFBuilder $factory ): void
        {
            self::$factory = $factory;
        }
    }
?>