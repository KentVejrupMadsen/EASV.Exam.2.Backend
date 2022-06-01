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

    const NameRoute = 'name';

    const NameReadRoute = 'read';
    const NameCreateRoute = 'create';
    const NameUpdateRoute = 'update';
    const NameDeleteRoute = 'delete';


    function NameApi(): void
    {
        Route::prefix( NameRoute )->group
        (
            function(): void
            {
                Route::controller( PersonNameController::class )->group
                (
                    function(): void
                    {
                        Route::get( NameReadRoute, 'read' );
                        Route::post( NameCreateRoute,'create' );
                        Route::patch( NameUpdateRoute, 'update' );
                        Route::delete( NameDeleteRoute, 'delete' );
                    }
                );
            }
        );
    }
?>