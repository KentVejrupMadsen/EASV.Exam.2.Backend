<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External libraries
    use Illuminate\Support\Facades\Broadcast;

    //
    Broadcast::channel( 'App.Models.User.{id}', 
        function( $user, $id ) 
        {
            return (int) $user->id === (int) $id;
        }
    );

?>