<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http\security;

    // External libraries
use App\Http\Controllers\templates\CrudController;
use App\Http\Requests\security\SecurityCSRFRequest;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

// Internal libraries


/**
     *
     */
    class SecurityRecaptchaController
        extends CrudController
    {
        //
        public function __construct()
        {

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

    }
?>
