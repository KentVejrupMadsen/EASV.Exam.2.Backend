<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;



    class ApiController
        extends Controller
    {
        //
        public function home()
        {
            $response = array();

            $response[ 'explorer' ] = array();

            return Response()->json( $response );
        }

    }
?>
