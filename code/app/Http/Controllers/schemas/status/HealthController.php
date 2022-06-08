<?php
    namespace App\Http\Controllers\schemas\status;

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
         * @return JsonResponse
         */
        public function now(): JsonResponse
        {
            $arr = ['status' => 'online'];
            return Response()->json( $arr, 200 );
        }
    }
?>