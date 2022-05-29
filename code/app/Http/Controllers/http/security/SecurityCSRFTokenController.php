<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http\security;

    // External libraries
    use Carbon\Carbon;

    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\CrudController;
    use App\Http\Requests\SecurityCSRFRequest;
    use App\Models\security\CSRFModel;


    /**
     * 
     */
    class SecurityCSRFTokenController
        extends CrudController
    {
        /**
         * 
         */
        function __construct()
        {

        }

        private const unAuthorized = 401;
        private const preConditionFailed = 412;
        private const forbidden = 403;
        private const conflict = 409;


        // Functions that the routes interacts with
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
        public function read( Request $request )
        {
            // TODO: Implement read() method.
        }


        public function update( Request $request )
        {
            // TODO: Implement update() method.
        }



        /**
         * acknowledgement of that the given token has been accessed
         * @param Request $request
         * @return Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function access( Request $request )
        {
            // Variables
            $response = array();

            $requestInput = $request->input('security');

            $csrfInput = $requestInput['csrf'];

            $reqId = $csrfInput[ 'id' ];
            $secureTokenFromRequest = $csrfInput[ 'secure_token' ];

            $modelFound = CSRFModel::findOrFail( $reqId );
            $registered_now = Carbon::now();

            // Code
            if( $modelFound->invalidated )
            {
                // Unauthorized
                abort( self::unAuthorized );
            }

            if( $modelFound->accessed )
            {
                abort(self::conflict );
            }

            if( $modelFound->assigned_to == $request->ip() )
            {
                // Are the secure token the same ? no, request is invalid
                if( !( $modelFound->secure_token == $secureTokenFromRequest ) )
                {
                    abort(self::preConditionFailed );
                }

                $pullSecret =  $request->session()->pull('secret_token' );

                if( $modelFound->secret_token == $pullSecret )
                {
                    $modelFound->accessed = $registered_now;
                    $modelFound->activated = true;

                    $modelFound->save();

                    // both secrets are the same
                    $response['security']['csrf']['id'] = $modelFound->id;
                    $response['security']['csrf']['accessed'] = $modelFound->accessed;
                    $response['security']['csrf']['issued'] = $modelFound->issued;

                }
                else
                {
                    $modelFound->accessed = $registered_now;
                    $modelFound->invalidated = true;

                    $modelFound->save();

                    abort(self::unAuthorized );
                }

            }
            else
            {
                $modelFound->accessed = $registered_now;
                $modelFound->invalidated = true;

                $modelFound->save();

                abort(self::forbidden );
            }

            return response( $response , 200 );
        }


        /**
         * @param Request $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request )
        {
            $inputModel = array();

            $inputModel[ 'assigned_to' ] = $request->ip();

            $inputModel[ 'secure_token' ] = str::random(64 );
            $inputModel[ 'secret_token' ] = str::random(64 );

            $inputModel[ 'activated' ] = false;
            $inputModel[ 'invalidated' ] = false;

            $model = CSRFModel::create( $inputModel );

            $responseModel = array();
            $responseModel['security']['csrf'][ 'secure_token' ] = $inputModel[ 'secure_token' ];
            $responseModel['security']['csrf'][ 'id' ] = $model->id;

            $request->session()->put( [ 'secret_token' => $inputModel[ 'secret_token' ] ] );

            return response( $responseModel, 200 );
        }


        /**
         * @param Request $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function reset( Request $request )
        {
            $request->session()->forget('secret_token' );

            $response = array();
            $response['message'] = 'reset';

            return response( $response, 200 );
        }


        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function invalidateOld()
        {

        }


        /**
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function invalidateAll()
        {
            CSRFModel::where('invalidated', '=', '0')->update(array('invalidated'=>1));
        }

        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete( Request $request)
        {

        }


        // Grouped functions internal
        /**
         * @param array $values
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        protected final function deleteGroup( array $values )
        {
            $idx = null;

            for( $idx = 0;
                 $idx < sizeof( $values );
                 $idx++ )
            {
                $current_id = $values[ $idx ];

                $model = CSRFModel::findOrFail( $current_id );
                $model->delete();
            }
        }

    }
?>