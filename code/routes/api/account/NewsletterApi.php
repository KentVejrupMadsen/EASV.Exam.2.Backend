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


    const NewsletterRoute = 'newsletter';

    const NewsletterCreateRoute =  'create';
    const NewsletterReadRoute   =  'read';
    const NewsletterUpdateRoute =  'update';
    const NewsletterDeleteRoute =  'delete';


   function NewsletterApi(): void
   {
       Route::prefix( NewsletterRoute )->group
       (
           function(): void
           {
               Route::controller( NewsletterController::class )->group
               (
                   function(): void
                   {
                       Route::post( NewsletterCreateRoute, 'create' );
                       Route::get( NewsletterReadRoute, 'read' );
                       Route::patch( NewsletterUpdateRoute, 'update' );
                       Route::delete( NewsletterDeleteRoute, 'delete' );
                   }
               );
           }
       );
   }
?>