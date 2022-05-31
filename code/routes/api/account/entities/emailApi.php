<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\httpControllers\account\entities\PersonEmailController;

    const entityEmailRoute = '/' . CURRENT_VERSION . '/account/entities/email';
    const EntityEmailRead = entityEmailRoute . '/read';
    const EntityEmailCreate = entityEmailRoute . '/create';
    const EntityEmailUpdate = entityEmailRoute . '/update';
    const EntityEmailDelete = entityEmailRoute . '/delete';


    Route::controller( PersonEmailController::class )->group
    (
        function()
        {
            Route::get( EntityEmailRead, 'read' );
            Route::post( EntityEmailCreate, 'create' );
            Route::patch( EntityEmailUpdate, 'update' );

            Route::delete( EntityEmailDelete, 'delete' );
        }
    );
?>