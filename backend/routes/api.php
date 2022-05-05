<?php

<<<<<<< HEAD
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    Route::middleware( 'auth:sanctum' )->get( '/user', 
        function( Request $request ) 
        {
            return $request->user();
        }
    );
?>
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
