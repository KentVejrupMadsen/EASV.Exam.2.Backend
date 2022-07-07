<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\schemas\security\configuration;

    // External libraries
    use Illuminate\Http\Request;
    use OpenApi\Attributes 
    	as OA;

    // Internal Libraries
    use App\Http\Controllers\templates\CrudController;
    use App\Http\Requests\security\configuration\SecurityConfigurationRequest;


    /**
     *
     */
    #[OA\Schema( title: 'Security Configuration Controller',
                 description: '',
                 type: self::model_type )]
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

        public static function explorerStructure(): array
        {
            return
                [
                    'configuration' =>
                    [
                        'create' =>
                            [
                                'operation' => 'create',
                                'url' => url('/api/1.0.0/securities/configuration/create'),
                                'requestHeader' => 'post'
                            ],

                        'read' =>
                            [
                                'operation' => 'read',
                                'url' => url('/api/1.0.0/securities/configuration/read'),
                                'requestHeader' => 'get'
                            ],

                        'update' =>
                            [
                                'operation' => 'update',
                                'url' => url('/api/1.0.0/securities/configuration/update'),
                                'requestHeader' => 'patch'
                            ],

                        'delete' =>
                            [
                                'operation' => 'delete',
                                'url' => url('/api/1.0.0/securities/configuration/delete'),
                                'requestHeader' => 'delete'
                            ]
                    ]
                ];
        }

        // Functions that the routes interacts with
        /**
         * @param SecurityConfigurationRequest $Request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/securities/configuration/read',
                  tags: [ '1.0.0', 'security' ] )]
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
        #[OA\Patch( path: '/api/1.0.0/securities/configuration/update',
                    tags: [ '1.0.0', 'security' ] )]
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
        #[OA\Post( path: '/api/1.0.0/securities/configuration/create',
                   tags: [ '1.0.0', 'security' ] )]
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
        #[OA\Delete( path: '/api/1.0.0/securities/configuration/delete',
                     tags: [ '1.0.0', 'security' ] )]
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
        protected static final function setSingleton( SecurityConfigurationController $controller ): void
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
                self::setSingleton(
                    new SecurityConfigurationController()
                );
            }

            return self::$controller;
        }
    }
?>
