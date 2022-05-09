<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    
    use App\Models\User;
    use App\Http\Controllers\AccountEmailController;


    class AccountController 
        extends Controller
    {
        //
        public final function me()
        {

        }

        public final function read()
        {
            
        }
        

        public final function login( Request $request )
        {
            $account_information = $request->input( 'account' );


            if( Auth::attempt( ['username'=> Str::lower( $account_information[ 'username' ] ), 'password' => $account_information['security']['password'] ] ) )
            {
                $author = Auth::user();

                $token = $author->createToken( 'account' )->plainTextToken;

                $auth = array();
                $auth['authorised'] = ['token_bearer' => $token];

                return response()->json( $auth, 200 );
            }
            else 
            {
                return response()->json( 'Unauthorised.', [ 'error'=>'Unauthorised' ] );
            }
        }


        public final function logout( Request $request )
        {

        }


        public final function create( Request $request )
        {
            $account_information = $request->input( 'account' );
            $EmailController = new AccountEmailController();

            $email_str = $account_information[ 'person_email' ];

            $mail = $EmailController->find( $email_str );

            if( is_null( $mail ) )
            {
                $mail = $EmailController->create( $email_str );
            }

            $account_create_fields = array();
            $account_create_fields[ 'email_id' ]  = $mail->id;
            $account_create_fields[ 'name' ]      = $account_information[ 'person_name' ];
            $account_create_fields[ 'username' ]  = $account_information[ 'username' ];
            $account_create_fields[ 'password' ]  = Hash::make( $account_information[ 'security' ][ 'password' ] );

            $account = User::create( $account_create_fields );

            return response( $account, 200 );
        }


        public final function update( Request $request )
        {

        }
        

        public final function delete( Request $request )
        {

        }

    }

?>