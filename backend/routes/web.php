<?php

<<<<<<< HEAD
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () 
        {
            return view('welcome');
        }
);

?>
=======
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
