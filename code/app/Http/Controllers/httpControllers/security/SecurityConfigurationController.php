<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\security;

    // External libraries
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal Libraries
    use App\Http\Controllers\templates\CrudController;
    use App\Http\Requests\security\SecurityConfigurationRequest;


    /**
     *
     */
    #[OA\Schema()]
    class SecurityConfigurationController
        extends CrudController
    {
        //
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        // Variables
        private static ?SecurityConfigurationController $controller = null;


        // Functions that the routes interacts with
        /**
         * @param SecurityConfigurationRequest $Request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/securities/configuration/read', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicRead( SecurityConfigurationRequest $Request )
        {
            return $this->read( $Request );
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
         * @param SecurityConfigurationRequest $Request
         * @return null
         */
        #[OA\Patch( path: '/api/1.0.0/securities/configuration/update', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicUpdate( SecurityConfigurationRequest $Request )
        {
            return $this->update( $Request );
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
         * @param SecurityConfigurationRequest $Request
         * @return null
         */
        #[OA\Post( path: '/api/1.0.0/securities/configuration/create', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicCreate( SecurityConfigurationRequest $Request )
        {
            return $this->create( $Request );
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function create( Request $request )
        {

            return null;
        }


        /**
         * @param SecurityConfigurationRequest $Request
         * @return null
         */
        #[OA\Delete( path: '/api/1.0.0/securities/configuration/delete', tags: [ '1.0.0', 'security' ] )]
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
        public final function publicDelete( SecurityConfigurationRequest $Request )
        {
            return $this->delete( $Request );
        }


        /**
         * @param Request $request
         * @return null
         */
        public final function delete( Request $request )
        {

            return null;
        }


        // Accessors
            // Setters
        /**
         * @param SecurityConfigurationController $controller
         * @return void
         */
        public static final function setSingleton( SecurityConfigurationController $controller ): void
        {
            self::$controller = $controller;
        }

            // Getters
        /**
         * @return SecurityConfigurationController
         */
        public static final function getSingleton(): SecurityConfigurationController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new SecurityConfigurationController() );
            }

            return self::$controller;
        }
    }
?>