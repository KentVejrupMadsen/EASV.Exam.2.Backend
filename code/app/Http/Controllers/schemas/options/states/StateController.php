<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\schemas\options\states;

    // External libraries
    use App\Http\Controllers\templates\ControllerOption;
    use App\Http\Requests\options\states\StateRequest;
    use OpenApi\Attributes as OA;

    // Internal libraries


    #[OA\Schema( title: 'State Controller',
                 description: '',
                 type: self::model_type )]
    class StateController
        extends ControllerOption
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            parent::__construct();

            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        // Variables
        private static ?StateController $controller = null;


        /**
         * @param StateRequest $request
         * @return void
         */
        #[OA\Post( path: '/api/1.0.0/options/state/email',
                   tags: [ '1.0.0', 'account-options' ] )]
        #[OA\Response( response: '200',
                       description: 'validates if the requested email is existing in the database as a json response.' ) ]
        public final function publicState( StateRequest $request )
        {

        }


        // Accessors
        /**
         * @param StateController $controller
         * @return void
         */
        protected static final function setSingleton( StateController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return StateController
         */
        public static final function getSingleton(): StateController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton(
                    new StateController()
                );
            }

            return self::$controller;
        }

    }
?>