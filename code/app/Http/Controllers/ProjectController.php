<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers;

    use App\Models\ProjectModel;

    use Illuminate\Http\Request;

    
    /**
     * 
     */
    class ProjectController 
        extends CrudController
    {
        /**
         * 
         */
        function __construct()
        {

        }

        private $projectMemberController = null;
        private $projectTitleModel = null;
        
        
        /**
         * 
         */
        public final function create( Request $request )
        {
            
        }

        /**
         * 
         */
        public final function read( Request $request )
        {
            
        }

        /**
         * 
         */
        public final function update( Request $request )
        {
            
        }


        /**
         * 
         */
        public final function delete( Request $request )
        {
            
        }
    }
?>