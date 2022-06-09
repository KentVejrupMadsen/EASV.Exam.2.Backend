<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\ApiHomeController;


    function HomeApi()
    {
        Route::get(
            '/',
            [ ApiHomeController::class, 'home' ]
        );
    }
?>