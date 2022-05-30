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
    use App\Http\Controllers\httpControllers\account\NewsletterController;


    // Routes
    Route::get(
        '/1.0.0/account/newsletter/read',
        [ NewsletterController::class, 'read' ]
    );

        // Create
    Route::post(
        '/1.0.0/account/newsletter/create',
        [ NewsletterController::class, 'create' ]
    );

        // Update
    Route::patch(
        '/1.0.0/account/newsletter/update',
        [ NewsletterController::class, 'update' ]
    );

        // Delete
    Route::delete(
        '/1.0.0/account/newsletter/delete',
        [ NewsletterController::class, 'delete' ]
    );
?>