<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    use App\Http\Controllers\schemas\status\structure\StructureController;
    use Illuminate\Support\Facades\Route;
    
    Route::get( '/', [ StructureController::class, 'home' ] );

    // Requiring all the routes
    require_once 'api/ApiRoutes.php';
?>
