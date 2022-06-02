<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\formatControllers\json;

    // External libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use Illuminate\Routing\Controller
        as BaseController;

    use OpenApi\Attributes
        as OA;

    // Internal library
    use App\Models\security\CSRFModel;


    /**
     *
     */
    #[OA\Schema()]
    class CSRFResponseJSONFactory
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


        /**
         * @param CSRFModel $model
         * @return \Illuminate\Http\JsonResponse
         */
        public function CreateResponse( CSRFModel $model ): JsonResponse
        {
            $array =
            [
                'id'            => $model->id,
                'secure_token'  => $model->secure_token,
                'issued'        => $model->issued
            ];

            return Response()->json($array, 200);
        }


        //
        private static $singleton = null;

        // Acessor
        /**
         * @return CSRFResponseJSONFactory
         */
        public static final function getSingleton(): CSRFResponseJSONFactory
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new CSRFResponseJSONFactory( false )
                );
            }

            return self::$singleton;
        }


        /**
         * @param CSRFResponseJSONFactory $formatter
         * @return void
         */
        protected static final function setSingleton( CSRFResponseJSONFactory $formatter ): void
        {
            self::$singleton = $formatter;
        }
    }
?>