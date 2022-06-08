<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // Internal libraries
    require_once 'BoardApi.php';
    require_once 'KanbanApi.php';
    require_once 'ProjectApi.php';
    require_once 'TaskApi.php';

    use App\Http\Controllers\NodesController;


    /**
     *
     */
    class ToolRoutes
        extends NodesController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setNodeRouteName( self::ToolRoute );
        }

        private const ToolRoute = 'tools';


        /**
         * @return void
         */
        protected final function execute(): void
        {
            MakeBoardApi();
            MakeKanbanApi();
            MakeProjectApi();
            MakeTaskApi();
        }
    }

    //
    function makeToolRoutes(): void
    {
        $tool = new ToolRoutes();
        $tool->run();
    }
?>