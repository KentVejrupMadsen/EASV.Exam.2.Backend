<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    require_once 'securityCSRFApi.php';
    require_once 'securityConfigurationApi.php';
    require_once 'securityRecapApi.php';

    function SecurityRoutes(): void
    {
        securityCSRFApi();
        securityConfigurationApi();
        securityRecapApi();
    }
?>