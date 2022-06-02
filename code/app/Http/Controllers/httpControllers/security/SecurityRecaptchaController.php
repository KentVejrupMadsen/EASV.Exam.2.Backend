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

    // Internal libraries
    use App\Http\Controllers\templates\CrudController;
    use App\Http\Requests\security\SecurityCSRFRequest;


    /**
     *
     */
    #[OA\Schema()]
    class SecurityRecaptchaController
        extends CrudController
    {
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

        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Get(path: '/api/1.0.0/securities/recaptcha/read' )]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicRead( SecurityCSRFRequest $Request )
        {
            $this->read( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Patch(path: '/api/1.0.0/securities/recaptcha/update' )]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicUpdate( SecurityCSRFRequest $Request )
        {
            $this->update( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Post(path: '/api/1.0.0/securities/recaptcha/create' )]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicCreate( SecurityCSRFRequest $Request )
        {
            $this->create( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Delete(path: '/api/1.0.0/securities/recaptcha/delete' )]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicDelete( SecurityCSRFRequest $Request )
        {
            $this->delete( $Request );
        }

        //
        /**
         * @param Request $request
         * @return void
         */
        public final function read( Request $request )
        {
            // TODO: Implement read() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        public final function create( Request $request )
        {
            // TODO: Implement create() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        public final function update( Request $request )
        {
            // TODO: Implement update() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        public final function delete( Request $request )
        {
            // TODO: Implement delete() method.
        }

        private static $controller = null;

        public static final function setSingleton( SecurityRecaptchaController $controller )
        {
            self::$controller = $controller;
        }

        public static final function getSingleton()
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new SecurityRecaptchaController() );
            }

            return self::$controller;
        }
    }
?>
