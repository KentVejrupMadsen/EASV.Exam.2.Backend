<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    require_once 'addressApi.php';
    require_once 'emailApi.php';
    require_once 'nameApi.php';


    function EntitiesRoutes()
    {
        AddressApi();
        EmailApi();
    }
?>