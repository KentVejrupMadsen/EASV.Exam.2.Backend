<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\schemas\options;

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


    #[OA\Schema( title: 'Find Controller',
                 description: '',
                 type: self::model_type )]
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
        private static ?FindController $controller = null;


        #[OA\Post( path: '/api/1.0.0/options/find/email', tags: [ '1.0.0', 'account-options' ] )]
        #[OA\Response( response: '200',
                       description: 'validates if the requested email is existing in the database as a json response.' ) ]
        #[OA\Response( response: '404',
                       description: 'content not found')]
        public function publicFind( FindRequest $request )
        {

        }

        // Accessor
        /**
         * @param FindController $controller
         * @return void
         */
        public static final function setSingleton( FindController $controller ): void
        {
            self::$controller = $controller;
        }

        /**
         * @return FindController
         */
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