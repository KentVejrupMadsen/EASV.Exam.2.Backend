<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\schemas\tools;

    // External Libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Http\Requests\tools\ToolsProjectMemberRequest;


    /**
     *
     */
    #[OA\Schema( title: 'Project Member Controller',
                 description: '',
                 type: self::model_type )]
    class ProjectMemberController
        extends ControllerPipeline
    {
        /**
         * @param bool $makeSingleton
         */
        public final function __construct( bool $makeSingleton = false )
        {
            parent::__construct();

            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        // Variables
        private static ?ProjectMemberController $controller = null;

        /**
         * @return bool
         */
        public final function hasImplementedCSV(): bool
        {
            return false;
        }

        /**
         * @return bool
         */
        public final function hasImplementedJSON(): bool
        {
            return false;
        }

        /**
         * @return bool
         */
        public final function hasImplementedXML(): bool
        {
            return false;
        }

        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {
            if( !$this->hasImplementedCSV() )
            {
                // Not implemented
                abort(501);
            }

            return null;
        }

        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public final function pipelineTowardJSON( Array $request ): ?JsonResponse
        {
            if( !$this->hasImplementedJSON() )
            {
                // Not implemented
                abort(501);
            }

            return null;
        }

        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardXML( Array $request ): ?array
        {
            if( !$this->hasImplementedXML() )
            {
                // Not implemented
                abort(501);
            }

            return null;
        }
        
        /**
         * 
         */
        #[OA\Post( path: '/api/1.0.0/tools/project/group/create', tags: [ '1.0.0', 'tools' ] )]
        #[OA\Response( response: '200',
                       description: 'The',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_create( ToolsProjectMemberRequest $request )
        {
            return $this->create( $request );
        }

        /**
         * @param Request $request
         * @return void
         */
        public final function create( Request $request )
        {

            return null;
        }


        /**
         * 
         */
        #[OA\Get( path: '/api/1.0.0/tools/project/group/read', tags: [ '1.0.0', 'tools' ] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found')]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_read( ToolsProjectMemberRequest $request )
        {

            return $this->read( $request );
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function read( Request $request )
        {

            return null;
        }


        /**
         * 
         */
        #[OA\Patch( path: '/api/1.0.0/tools/project/group/update', tags: [ '1.0.0', 'tools' ] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_update( ToolsProjectMemberRequest $request )
        {

            return $this->update( $request );
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function update( Request $request )
        {

            return null;
        }


        /**
         * 
         */
        #[OA\Delete( path: '/api/1.0.0/tools/project/group/delete', tags: [ '1.0.0', 'tools' ] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_delete( ToolsProjectMemberRequest $request )
        {

            return $this->delete( $request );
        }

        /**
         * @param Request $request
         * @return void
         */
        public final function delete( Request $request )
        {

            return null;
        }


        // Accessors
        /**
         * @param ProjectMemberController $controller
         * @return void
         */
        public static final function setSingleton( ProjectMemberController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return ProjectMemberController
         */
        public static final function getSingleton(): ProjectMemberController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new ProjectMemberController() );
            }

            return self::$controller;
        }
    }
?>