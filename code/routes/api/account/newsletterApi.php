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


    const newsletter_route = 'newsletter';

    const newsletter_read_route   =  'read';
    const newsletter_create_route =  'create';
    const newsletter_update_route =  'update';
    const newsletter_delete_route =  'delete';


   function NewsletterApi()
   {
       Route::prefix( newsletter_route )->group
       (
           function()
           {
               Route::controller( NewsletterController::class )->group
               (
                   function()
                   {
                       Route::get( newsletter_read_route, 'read' );
                       Route::post( newsletter_create_route, 'create' );
                       Route::patch( newsletter_update_route, 'update' );
                       Route::delete( newsletter_delete_route, 'delete' );
                   }
               );
           }
       );
   }
?>