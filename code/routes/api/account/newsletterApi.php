<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\http\account\NewsletterController;

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