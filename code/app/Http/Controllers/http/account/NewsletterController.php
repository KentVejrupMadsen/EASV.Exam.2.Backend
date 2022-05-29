<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http\account;

    // External Libraries
    use Carbon\Carbon;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // internal Libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Http\Requests\account\NewsletterRequest;
    use App\Models\tables\NewsletterSubscriptionModel;


    /**
     * 
     */
    final class NewsletterController
        extends ControllerPipeline
    {
        /**
         *
         */
        public final function __construct()
        {
            parent::__construct();
        }


        // Variables
        private const conflict = 409;

        // implement output
        public final function hasImplementedCSV(): bool
        {
            // TODO: Implement hasImplementedCSV() method.
            return true;
        }

        public final function hasImplementedJSON(): bool
        {
            // TODO: Implement hasImplementedJSON() method.
            return true;
        }

        public final function hasImplementedXML(): bool
        {
            // TODO: Implement hasImplementedXML() method.
            return true;
        }

        public final function pipelineTowardCSV( Request $request ): ?array
        {
            // TODO: Implement pipelineTowardCSV() method.
            return null;
        }

        public final function pipelineTowardJSON( Request $request ): ?array
        {
            // TODO: Implement pipelineTowardJSON() method.
            return null;
        }

        public final function pipelineTowardXML( Request $request ): ?array
        {
            // TODO: Implement pipelineTowardXML() method.
            return null;
        }

        // Crud
        /**
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function me()
        {
            $currentUser = Auth::user();
            return response( $currentUser );
        }


        /**
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function read( Request $request )
        {
            
        }


        /**
         * @param Request $request
         * @return \Illuminate\Http\JsonResponse
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function login( Request $request )
        {
            $this->CSRFTokenController->access( $request );

            $account_information = $request->input( 'account' );


            if( Auth::attempt( [ 'username'=> Str::lower( $account_information[ 'username' ] ),
                                 'password' => $account_information['security']['password'] ] ) )
            {
                $author = Auth::user();

                $token = $author->createToken( 'account' )->plainTextToken;

                $auth = array();
                $auth['authorised'] = ['token_bearer' => $token, 'username' => $author->username ];

                return response()->json( $auth, 200 );
            }
            else 
            {
                return response()->json( 'Unauthorised.', [ 'error'=>'Unauthorised' ] );
            }
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function logout( Request $request )
        {
            $request->user()
                    ->currentAccessToken()
                    ->delete();
        }


        /**
         * @param Request $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request )
        {
            $this->CSRFTokenController->access( $request );

            $account_information = $request->input( 'account' );

            $email_str = $account_information[ 'person' ][ 'email' ];

            $mail = $this->EmailModelController->find( $request );

            if( is_null( $mail ) )
            {
                $mail = $this->EmailModelController->create( $request );
            }

            $account_create_fields = array();
            $account_create_fields[ 'email_id' ]  = $mail->id;

            $account_create_fields[ 'username' ]  = $account_information[ 'username' ];
            $account_create_fields[ 'password' ]  = Hash::make( $account_information[ 'security' ][ 'password' ] );

            $account = User::create( $account_create_fields );

            return response( $account, 200 );
        }


        /**
         * @param Request $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $request )
        {
            $this->CSRFTokenController->access( $request );

            $account = Auth::user();

            $response = array();
            $accountInformation = $request->input('account');


            $mailModel = $this->EmailModelController->find( $accountInformation[ 'person_email' ] );

            if( is_null( $mailModel ) )
            {
                $mailModel = $this->EmailModelController->create( $accountInformation[ 'person_email' ] );
            }

            $account->email_id = $mailModel->id;

            // Passwords
            $new = Hash::make($accountInformation['security']['password']);
            $account->password = $new;

            $account->save();

            return Response($response, 200);
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete( Request $request )
        {
            $this->CSRFTokenController->access( $request );

            $response = array();

            $account = Auth::user();

            $account->delete();
            $response[ 'message' ] = 'successful' ;

            return Response( $response, 200 );
        }


        /**
         * @param Request $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function verify( Request $request )
        {
            $this->CSRFTokenController->access( $request );

            $response = array();

            $user = Auth::user();

            if( is_null( $user->email_verified_at ) )
            {
                $user->email_verified_at = Carbon::now();
                $user->save();

                $response['message'] = 'verified';
                $response['at']= $user->email_verified_at;
            }
            else
            {
                abort(self::conflict );
            }

            return Response( $response );
        }

    }

?>