<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers;
    
    // external libraries
	use Illuminate\Http\Request;

	// Internal libraries
    use App\Http\Controllers\schemas\security\configuration\SecurityConfigurationController 
    	as ConfigurationController;
	
	use App\Http\Controllers\schemas\security\csrf\SecurityCSRFTokenController 
		as CSRFController;
		
	use App\Http\Controllers\schemas\security\recaptcha\SecurityRecaptchaController 
		as RecaptchaController;
	
	
	/**
     * 
     */
    class ApiHomeController
        extends Controller
    {
        /**
         * @return string
         */
        protected function currentVersionNumber(): string
        {
            return '1.0.0';
        }


        /**
         * @return string
         */
        protected function currentVersion(): string
        {
            return 'Version ' . $this->currentVersionNumber() . ' Alpha';
        }


        /**
         * @return array
         */
        protected function generateAccountApi(): array
        {
            $structure = 
            [
                'account' => 
                [   'create' =>
                    [ 
                        'operation' => 'create',
                        'url' => url('/api/1.0.0/accounts/account/create'),
                        'requestHeader' => 'post'
                    ],

                    'delete' =>
                    [ 
                        'operation' => 'delete',
                        'url' => url('/api/1.0.0/accounts/account/delete'),
                        'requestHeader' => 'delete'
                    ],

                    'login' =>
                    [ 
                        'operation' => 'login',
                        'url' => url('/api/1.0.0/accounts/account/login'),
                        'requestHeader' => 'post'
                    ],

                    'logout' =>
                    [ 
                        'operation' => 'logout',
                        'url' => url('/api/1.0.0/accounts/account/logout'),
                        'requestHeader' => 'get'
                    ],

                    'me' =>
                    [ 
                        'operation' => 'me',
                        'url' => url('/api/1.0.0/accounts/account/me'),
                        'requestHeader' => 'get'
                    ],

                    'read' =>
                    [ 
                        'operation' => 'read',
                        'url' => url('/api/1.0.0/accounts/account/read'),
                        'requestHeader' => 'get'
                    ],

                    'update' =>
                    [ 
                        'operation' => 'update',
                        'url' => url('/api/1.0.0/accounts/account/update'),
                        'requestHeader' => 'patch'
                    ],

                    'verify' =>
                    [ 
                        'operation' => 'verify',
                        'url' => url('/api/1.0.0/accounts/account/verify'),
                        'requestHeader' => 'post'
                    ]
                ],

                'entities' => 
                [
                    'address' =>
                    [
                        'create' =>
                        [ 
                            'operation' => 'create',
                            'url' => url('/api/1.0.0/accounts/entities/address/create'),
                            'requestHeader' => 'post'
                        ],

                        'read' =>
                        [ 
                            'operation' => 'read',
                            'url' => url('/api/1.0.0/accounts/entities/address/read'),
                            'requestHeader' => 'get'
                        ],

                        'update' =>
                        [ 
                            'operation' => 'update',
                            'url' => url('/api/1.0.0/accounts/entities/address/update'),
                            'requestHeader' => 'patch'
                        ],

                        'delete' =>
                        [ 
                            'operation' => 'delete',
                            'url' => url('/api/1.0.0/accounts/entities/address/delete'),
                            'requestHeader' => 'delete'
                        ]
                    ],

                    'email' =>
                    [
                        
                        'create' =>
                        [ 
                            'operation' => 'create',
                            'url' => url('/api/1.0.0/accounts/entities/email/create'),
                            'requestHeader' => 'post'
                        ],

                        'read' =>
                        [ 
                            'operation' => 'read',
                            'url' => url('/api/1.0.0/accounts/entities/email/read'),
                            'requestHeader' => 'get'
                        ],

                        'update' =>
                        [ 
                            'operation' => 'update',
                            'url' => url('/api/1.0.0/accounts/entities/email/create'),
                            'requestHeader' => 'patch'
                        ],

                        'delete' =>
                        [ 
                            'operation' => 'delete',
                            'url' => url('/api/1.0.0/accounts/entities/email/delete'),
                            'requestHeader' => 'delete'
                        ]
                    ],
                    
                    'name' =>
                    [
                        
                        'create' =>
                        [ 
                            'operation' => 'create',
                            'url' => url('/api/1.0.0/accounts/entities/name/create'),
                            'requestHeader' => 'post'
                        ],

                        'read' =>
                        [ 
                            'operation' => 'read',
                            'url' => url('/api/1.0.0/accounts/entities/name/read'),
                            'requestHeader' => 'get'
                        ],

                        'update' =>
                        [ 
                            'operation' => 'update',
                            'url' => url('/api/1.0.0/accounts/entities/name/update'),
                            'requestHeader' => 'patch'
                        ],

                        'delete' =>
                        [ 
                            'operation' => 'delete',
                            'url' => url('/api/1.0.0/accounts/entities/name/delete'),
                            'requestHeader' => 'delete'
                        ]
                    ]
                ],

                'information' => 
                [
                    'create' =>
                    [ 
                        'operation' => 'create',
                        'url' => url('/api/1.0.0/accounts/information/create'),
                        'requestHeader' => 'post'
                    ],

                    'read' =>
                    [ 
                        'operation' => 'read',
                        'url' => url('/api/1.0.0/accounts/information/read'),
                        'requestHeader' => 'get'
                    ],

                    'update' =>
                    [ 
                        'operation' => 'update',
                        'url' => url('/api/1.0.0/accounts/information/update'),
                        'requestHeader' => 'patch'
                    ],

                    'delete' =>
                    [ 
                        'operation' => 'delete',
                        'url' => url('/api/1.0.0/accounts/information/delete'),
                        'requestHeader' => 'delete'
                    ]

                ],

                'newsletter' => 
                [
                    
                    'create' =>
                    [ 
                        'operation' => 'create',
                        'url' => url('/api/1.0.0/accounts/newsletter/create'),
                        'requestHeader' => 'post'
                    ],

                    'read' =>
                    [ 
                        'operation' => 'read',
                        'url' => url('/api/1.0.0/accounts/newsletter/read'),
                        'requestHeader' => 'get'
                    ],

                    'update' =>
                    [ 
                        'operation' => 'update',
                        'url' => url('/api/1.0.0/accounts/newsletter/update'),
                        'requestHeader' => 'patch'
                    ],

                    'delete' =>
                    [ 
                        'operation' => 'delete',
                        'url' => url('/api/1.0.0/accounts/newsletter/delete'),
                        'requestHeader' => 'delete'
                    ]
                ]
            ];

            return $structure;
        }


        /**
         * @return array
         */
        protected function generateOptionsApi(): array
        {
            $structure = 
            [
                'find' =>
                [ 
                    'operation' => 'find',
                    'url' => url('/api/1.0.0/options/find/email'),
                    'requestHeader' => 'post'
                ],

                'state' =>
                [ 
                    'operation' => 'state of',
                    'url' => url('/api/1.0.0/options/state/email'),
                    'requestHeader' => 'post'
                ]
            ];

            return $structure;
        }


        /**
         * @return array
         */
        protected function generateSecurityApi(): array
        {
            $list = array();
            array_push($list, CSRFController::explorerStructure());
            array_push($list, ConfigurationController::explorerStructure());
            array_push($list, RecaptchaController::explorerStructure());

            return $list;
        }


        /**
         * @return array
         */
        protected final function generateExplorerStructure(): array
        {
            $structure =
            [
                'current' => $this->currentVersion(),
                'paths'   =>
                [
                    'routes' =>
                    [
                        'accounts'  => $this->generateAccountApi(),
                        'options'   => $this->generateOptionsApi(),
                        'security'  => $this->generateSecurityApi()
                    ]
                ]
            ];

            return $structure;
        }

        /**
         * @return string
         */
        protected function apiUrl(): string
        {
            return url('/api');
        }


        /**
         * @return array
         */
        protected function generateApiExplorer(): array
        {
            $returnValue = array();

            $returnValue[ 'parent' ] = $this->apiUrl();
            $returnValue[ 'explorer' ] = $this->generateExplorerStructure();

            return $returnValue;
        }


        // Response
        public final function home( Request $request )
        {
            $response = $this->generateApiExplorer();
            return Response()->json( $response );
        }


        //
        private static $controller = null;


        // accessors
        /**
         * @param ApiHomeController $controller
         * @return void
         */
        public static final function setSingleton( ApiHomeController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return ApiHomeController
         */
        public static final function getSingleton(): ApiHomeController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new ApiHomeController() );
            }

            return self::$controller;
        }
    }
?>
