<?php
    namespace App\Http\Controllers\schemas\status\structure;

    // External
    use Illuminate\Http\JsonResponse;

    use Illuminate\Routing\Controller
        as BaseController;


    /**
     *
     */
    class StructureController
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
        private static ?StructureController $singleton = null;


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
         * @return StructureController|null
         */
        public static function getSingleton(): ?StructureController
        {
            return self::$singleton;
        }


        /**
         * @param StructureController|null $singleton
         * @return void
         */
        public static function setSingleton( ?StructureController $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>