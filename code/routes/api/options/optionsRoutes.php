<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    require_once 'findApi.php';
    require_once 'stateApi.php';

    function optionsRoutes(): void
    {
        findApi();
        stateApi();
    }
?>