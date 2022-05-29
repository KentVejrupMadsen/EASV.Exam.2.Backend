<?php
    use Illuminate\Support\Facades\Route;

    use \App\Http\Controllers\ApiHomeController;

    Route::get(
        '/',
        [ ApiHomeController::class, 'home' ]
    );
?>