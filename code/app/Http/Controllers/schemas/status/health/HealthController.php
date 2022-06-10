<?php
    namespace App\Http\Controllers\schemas\status\health;

    // External
    use Illuminate\Http\JsonResponse;

    use Illuminate\Routing\Controller
        as BaseController;


    /**
     *
     */
    class HealthController
        extends BaseController
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        // Variables
        private static ?HealthController $singleton = null;


        /**
         * @return JsonResponse
         */
        public function now(): JsonResponse
        {
            $arr = ['status' => 'online'];
            return Response()->json( $arr, 200 );
        }

        // Accessor
        /**
         * @return HealthController|null
         */
        public static function getSingleton(): ?HealthController
        {
            return self::$singleton;
        }

        /**
         * @param HealthController|null $singleton
         */
        public static function setSingleton( ?HealthController $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>