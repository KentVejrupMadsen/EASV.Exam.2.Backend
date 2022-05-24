<?php
    /**
     * Author: Kent vejrup Madsen
     * Description: ?
     * TODO: make a description
     */
    $mw_sanctum =  'auth:sanctum';

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\AccountEmailController;

    Route::post(
        '/1.0.0/find/email',
        [ AccountEmailController::class, 'find' ]
    );

    Route::post(
        '/1.0.0/exist/email',
        [ AccountEmailController::class, 'exist' ]
    );
?>