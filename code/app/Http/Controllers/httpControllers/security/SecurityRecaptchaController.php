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
        public function publicRead( SecurityCSRFRequest $Request )
        {
            $this->read( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicUpdate( SecurityCSRFRequest $Request )
        {
            $this->update( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicCreate( SecurityCSRFRequest $Request )
        {
            $this->create( $Request );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicDelete( SecurityCSRFRequest $Request )
        {
            $this->delete( $Request );
        }

        //
        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function read( Request $request )
        {
            // TODO: Implement read() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request )
        {
            // TODO: Implement create() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $request )
        {
            // TODO: Implement update() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
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
