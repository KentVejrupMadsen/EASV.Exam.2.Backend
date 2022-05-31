<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    require_once 'boardApi.php';
    require_once 'kanbanApi.php';
    require_once 'projectApi.php';
    require_once 'taskApi.php';


    function ToolRoutes(): void
    {
        BoardApi();
        KanbanApi();
        ProjectApi();
        TaskApi();
    }
?>