<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use \App\Http\Controllers\ApiHomeController;

    
    Route::get(
        '/',
        [ ApiHomeController::class, 'home' ]
    );
?>