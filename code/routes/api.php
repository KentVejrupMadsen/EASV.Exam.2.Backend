<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // Constants
    const MIDDLEWARE_SANCTUM = 'auth:sanctum';

    // Short constants
    define('MIDSANC', MIDDLEWARE_SANCTUM);


    // Requiring all the routes
    require_once 'api/apiRoutes.php';
?>