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
        private static ?SecurityCSRFGC $factory = null;


        /**
         * @return SecurityCSRFGC
         */
        public final static function getFactory(): SecurityCSRFGC
        {
            if( is_null( self::$factory ) )
            {
                self::setFactory( new SecurityCSRFBuilder() );
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