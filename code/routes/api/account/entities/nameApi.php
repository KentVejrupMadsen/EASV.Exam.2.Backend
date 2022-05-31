<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External library
    use Illuminate\Support\Facades\Route;

    // Internal library
    use App\Http\Controllers\httpControllers\account\entities\PersonNameController;


    const entityNameRoute = '/' . CURRENT_VERSION . '/account/entities/name';
    const entityNameReadRoute = entityNameRoute . '/read';
    const entityNameCreateRoute = entityNameRoute . '/create';
    const entityNameUpdateRoute = entityNameRoute . '/update';
    const entityNameDeleteRoute = entityNameRoute . '/delete';


    function NameApi()
    {
        Route::prefix( 'name' )->group
        (
            function()
            {
                Route::controller( PersonNameController::class )->group
                (
                    function()
                    {
                        Route::get( entityNameReadRoute, 'read' );
                        Route::post( entityNameCreateRoute,'create' );
                        Route::patch( entityNameUpdateRoute, 'update' );
                        Route::delete( entityNameDeleteRoute, 'delete' );
                    }
                );
            }
        );
    }
?>