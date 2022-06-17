<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    use App\Http\Controllers\schemas\status\structure\StructureController;
    use Illuminate\Support\Facades\Route;
    
    Route::get( '/', [ StructureController::class, 'home' ] );

    // Requiring all the routes
    require_once 'api/ApiRoutes.php';
?>
