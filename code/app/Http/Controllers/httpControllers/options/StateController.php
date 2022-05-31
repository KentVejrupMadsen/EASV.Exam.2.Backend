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


    /**
     * 
     */
    final class StateController
        extends ControllerOption
    {
        /**
         *
         */
        public final function __construct( bool $makeSingleton = true )
        {
            parent::__construct();
        }

        // Variables
        private const conflict = 409;


        public final function publicState( StateRequest $request )
        {

        }

        private static $controller = null;

        public static final function setSingleton( StateController $controller )
        {
            self::$controller = $controller;
        }

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