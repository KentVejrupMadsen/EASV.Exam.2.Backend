<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    require_once 'BoardApi.php';
    require_once 'KanbanApi.php';
    require_once 'ProjectApi.php';
    require_once 'TaskApi.php';

    use Illuminate\Support\Facades\Route;

    const ToolRoute = 'tools';


    //
    function ToolRoutes(): void
    {
        Route::prefix( ToolRoute )->group
        (
            function()
            {
                MakeBoardApi();
                MakeKanbanApi();
                MakeProjectApi();
                MakeTaskApi();
            }
        );
    }
?>