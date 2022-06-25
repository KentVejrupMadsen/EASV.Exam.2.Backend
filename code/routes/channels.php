<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
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
