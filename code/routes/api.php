<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    require_once './api/api.php';

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ApiHomeController;


    Route::get(
        '/',
        [ ApiHomeController::class, 'home' ]
    );
?>