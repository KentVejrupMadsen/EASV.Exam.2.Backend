<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\options;

    // External
    use Carbon\Carbon;

    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // Internal
    use App\Models\tables\AccountEmailModel;
    use App\Http\Requests\options\FindRequest;
    use App\Http\Controllers\templates\ControllerOption;


    class FindController
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
        private const conflict = 409;


        #[OA\Post( path: '/api/1.0.0/options/find/email' )]
        #[OA\Response( response: '200', description: 'validates if the requested email is existing in the database as a json response.' ) ]
        public function publicFind( FindRequest $request )
        {

        }

        private static $controller = null;

        public static final function setSingleton( FindController $controller )
        {
            self::$controller = $controller;
        }

        public static final function getSingleton(): FindController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new FindController() );
            }

            return self::$controller;
        }
    }
?>