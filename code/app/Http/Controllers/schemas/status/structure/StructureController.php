<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
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
            $arr = [ 'status' => 'online' ];
            return Response()->json( $arr, 200 );
        }

        /**
         * @return array
         */
        protected function HomeStructure(): array
        {
            return 
            [
                'version' => 
                [
                    '1.0.0' => 
                    [
                        'state' => 'alpha',
                        'link'  => url("/api/1.0.0" ),
                        'openapi' => 'https://app.swaggerhub.com/apis/Goal-Pioneers/kanban-project_backend_api/1.0.0-alpha'
                    ]
                ]
            ];
        }

        
        /**
         * @return JsonResponse
         */
        public final function home(): JsonResponse
        {
            return Response()->json( $this->HomeStructure() );
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
