<?php
    namespace App\Http\Controllers\models\status;

    use Illuminate\Routing\Controller
        as BaseController;


    class HealthController
        extends BaseController
    {
        public function now()
        {
            $arr = ['status' => 'online'];
            return Response()->json( $arr, 200 );
        }
    }
?>