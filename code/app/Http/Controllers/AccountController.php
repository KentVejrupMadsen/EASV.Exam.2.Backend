<?php
    /**
     * Author: Kent vejrup Madsen
     */
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    
    use App\Models\User;
    use App\Http\Controllers\AccountEmailController;


    /**
     * 
     */
    class AccountController 
        extends Controller
    {
        /**
         * 
         */
        function __construct()
        {
            $this->EmailModelController = new AccountEmailController();
        }

        protected $EmailModelController = null;

        
        /**
         * 
         */
        public final function me()
        {
            $currentUser = Auth::user();
            return response( $currentUser );
        }


        /**
         * 
         */
        public final function read()
        {
            
        }
        

        /**
         * 
         */
        public final function login( Request $request )
        {
            $account_information = $request->input( 'account' );


            if( Auth::attempt( ['username'=> Str::lower( $account_information[ 'username' ] ), 'password' => $account_information['security']['password'] ] ) )
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
         * 
         */
        public final function logout( Request $request )
        {
            $request->user()->currentAccessToken()->delete();
        }


        /**
         * 
         */
        public final function create( Request $request )
        {
            $account_information = $request->input( 'account' );

            $email_str = $account_information[ 'person_email' ];

            $mail = $this->EmailModelController->find( $email_str );

            if( is_null( $mail ) )
            {
                $mail = $this->EmailModelController->create( $email_str );
            }

            $account_create_fields = array();
            $account_create_fields[ 'email_id' ]  = $mail->id;
            $account_create_fields[ 'name' ]      = $account_information[ 'person_name' ];
            $account_create_fields[ 'username' ]  = $account_information[ 'username' ];
            $account_create_fields[ 'password' ]  = Hash::make( $account_information[ 'security' ][ 'password' ] );

            $account = User::create( $account_create_fields );

            return response( $account, 200 );
        }


        /**
         * 
         */
        public final function update( Request $request )
        {

        }
        

        /**
         * 
         */
        public final function delete( Request $request )
        {

        }

    }

?>