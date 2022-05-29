<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // Internal libraries
    use App\Http\Controllers\http\account\AccountController;

    // External libraries
    use Illuminate\Support\Facades\Route;


    // Routes
    Route::post(
        '/1.0.0/account/login',
        [ AccountController::class, 'login' ]
    );

    Route::post(
        '/1.0.0/account/verify',
        [ AccountController::class, 'verify' ]
    );

        // Register / Create
    Route::post(
        '/1.0.0/account/create',
        [ AccountController::class, 'create' ]
    );

        // Whoami
    Route::middleware( MIDSANC )->get(
        '/1.0.0/account/me',
        [ AccountController::class, 'me' ]
    );

        // Logout
    Route::middleware( MIDSANC )->get(
        '/1.0.0/account/logout',
        [ AccountController::class, 'logout' ]
    );

        // Update
    Route::middleware( MIDSANC )->patch(
        '/1.0.0/account/update',
        [ AccountController::class, 'update' ]
    );

        // Delete
    Route::middleware( MIDSANC )->delete(
        '/1.0.0/account/delete',
        [ AccountController::class, 'delete' ]
    );
?>