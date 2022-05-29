<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http\security;

    // External libraries
    use Illuminate\Http\Request;
    use OpenApi\Attributes
        as OA;

    // Internal Libraries
    use App\Http\Controllers\templates\CrudController;
    use App\Http\Requests\SecurityConfigurationRequest;


    /**
     *
     */
    class SecurityConfigurationController
        extends CrudController
    {
        //
        public function __construct()
        {


        }

        // Functions that the routes interacts with
        /**
         * @param SecurityConfigurationRequest $Request
         * @return void
         */
        public function publicRead( SecurityConfigurationRequest $Request )
        {
            $this->read( $Request );
        }


        /**
         * @param SecurityConfigurationRequest $Request
         * @return void
         */
        public function publicUpdate( SecurityConfigurationRequest $Request )
        {
            $this->update( $Request );
        }


        /**
         * @param SecurityConfigurationRequest $Request
         * @return void
         */
        public function publicCreate( SecurityConfigurationRequest $Request )
        {
            $this->create( $Request );
        }


        /**
         * @param SecurityConfigurationRequest $Request
         * @return void
         */
        public function publicDelete( SecurityConfigurationRequest $Request )
        {
            $this->delete( $Request );
        }


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