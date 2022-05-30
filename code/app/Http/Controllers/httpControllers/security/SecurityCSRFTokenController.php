<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\security;

    // External libraries
    use App\Http\Controllers\cacheControllers\RedisCacheCSRFController;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redis;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // Internal libraries
    use App\Http\Controllers\templates\ControllerMessages;
    use App\Http\Controllers\templates\CrudController;

    use App\Http\Requests\security\SecurityCSRFRequest;
    use App\Models\security\CSRFModel;


    /**
     * 
     */
    class SecurityCSRFTokenController
        extends CrudController
    {
        private $cache = null;

        protected final function getCache()
        {
            return $this->cache;
        }

        protected final function setCache( RedisCacheCSRFController $cacheController )
        {
            $this->cache = $cacheController;
        }


        /**
         * @return bool
         */
        protected final function isCacheEmpty(): bool
        {
            return is_null( $this->cache );
        }

        /**
         * 
         */
        function __construct()
        {
            if( $this->isCacheEmpty() )
            {
                $this->setCache( RedisCacheCSRFController::getSingleton() );
            }
        }

        // Functions that the routes interacts with
        /**
         * @param SecurityCSRFRequest $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function access( SecurityCSRFRequest $request )
        {
            // Variables
            $response = array();

            $requestInput = $request->input('security' );

            $csrfInput = $requestInput[ 'csrf' ];

            $reqId = $csrfInput[ 'id' ];
            $secureTokenFromRequest = $csrfInput[ 'secure_token' ];

            $modelFound = CSRFModel::findOrFail( $reqId );
            $registered_now = Carbon::now();

            // Code
            if( $modelFound->invalidated )
            {
                // Unauthorized
                abort( ControllerMessages::unAuthorized );
            }

            if( $modelFound->accessed )
            {
                abort(ControllerMessages::conflict );
            }

            if( $modelFound->assigned_to == $request->ip() )
            {
                // Are the secure token the same ? no, request is invalid
                if( !( $modelFound->secure_token == $secureTokenFromRequest ) )
                {
                    abort(ControllerMessages::preConditionFailed );
                }

                // Comment out
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

                    abort(ControllerMessages::unAuthorized );
                }

            }
            else
            {
                $modelFound->accessed = $registered_now;
                $modelFound->invalidated = true;

                $modelFound->save();

                abort(ControllerMessages::forbidden );
            }

            return response( $response , 200 );
        }


        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicRead( SecurityCSRFRequest $Request )
        {
            $this->read( $Request );
        }

        /**
         * @param Request $request
         * @return void
         */
        public function read( Request $request )
        {
            // TODO: Implement read() method.
        }

        /**
         * @param SecurityCSRFRequest $Request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        public function publicCreate( SecurityCSRFRequest $Request )
        {
            return $this->create( $Request );
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

            Redis::set( '_csrf_api_token_' . $model->id, $model );

            return response( $responseModel, 200 );
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
         * @param Request $request
         * @return void
         */
        public function update( Request $request )
        {
            // TODO: Implement update() method.
        }


        /**
         * @param SecurityCSRFRequest $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function reset( SecurityCSRFRequest $request )
        {

            Redis::del('_csrf_api_token_' . $request->input('id' ) );
            //$request->session()->forget('secret_token' );

            $response = array();
            $response['message'] = 'reset';

            return response( $response, 200 );
        }


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
            CSRFModel::where( 'invalidated', '=', '0' )->update(
                array( 'invalidated' => 1 )
            );
        }


        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicDelete( SecurityCSRFRequest $Request )
        {
            $this->delete( $Request );
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete( Request $request )
        {

        }


        // Grouped functions internally
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

        private static $controller = null;

        public static final function setSingleton( SecurityCSRFTokenController $controller )
        {
            self::$controller = $controller;
        }

        public static final function getSingleton(): SecurityCSRFTokenController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new SecurityCSRFTokenController() );
            }

            return self::$controller;
        }

    }
?>