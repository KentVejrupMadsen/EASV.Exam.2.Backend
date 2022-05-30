<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\httpControllers\options\FindController;

    Route::post(
        '/1.0.0/find',
        [ FindController::class, 'publicFind' ]
    );
?>