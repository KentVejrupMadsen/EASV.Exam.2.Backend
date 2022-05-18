<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    use Carbon\Carbon;

    use App\Models\CSRFModel;


    /**
     * 
     */
    class CSRFTokenController
        extends Controller
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


        /**
         * acknowledgement of that the given token has been accessed
         * @param Request $request
         * @return Response
         */
        public final function access( Request $request )
        {
            // Variables
            $response = array();

            $reqId = $request->input('id' );
            $secureTokenFromRequest = $request->input('secure_token' );

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
                    $response['id'] = $modelFound->id;
                    $response['accessed'] = $modelFound->accessed;
                    $response['issued'] = $modelFound->issued;

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
            $responseModel[ 'secure_token' ] = $inputModel[ 'secure_token' ];
            $responseModel[ 'id' ] = $model->id;

            $request->session()->put( [ 'secret_token' => $inputModel[ 'secret_token' ] ] );

            return response( $responseModel, 200 );
        }


        /**
         * @param Request $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        public final function reset( Request $request )
        {
            $request->session()->forget('secret_token' );

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
        public final function invalidateAll()
        {
            CSRFModel::where('invalidated', '=', '0')->update(array('invalidated'=>1));
        }


        /**
         * @param int $id
         * @return void
         */
        public final function delete( int $id )
        {
            $model = CSRFModel::findOrFail( $id );
            $model->delete();
        }


        /**
         * @param array $values
         * @return void
         */
        public final function deleteGroup( array $values )
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