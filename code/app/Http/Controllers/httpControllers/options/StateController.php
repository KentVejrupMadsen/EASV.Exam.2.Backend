<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\options;

    // External libraries
    use Carbon\Carbon;

    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\ControllerOption;

    use App\Models\tables\AccountEmailModel;
    use App\Http\Requests\options\StateRequest;


    #[OA\Schema()]
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
        #[OA\Post( path: '/api/1.0.0/options/state/email' )]
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
        public static final function setSingleton( StateController $controller ): void
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
                self::setSingleton( new StateController() );
            }

            return self::$controller;
        }

    }
?>