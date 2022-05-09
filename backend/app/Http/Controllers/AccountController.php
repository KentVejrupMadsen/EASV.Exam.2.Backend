<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Http\Controllers\AccountEmailController;

    use Illuminate\Support\Facades\Hash;
    use App\Models\User;

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

        }


        public final function logout( Request $request )
        {

        }


        public final function create( Request $request )
        {
            $account_information = $request->input( 'account' );
            $EmailController = new AccountEmailController();
            $EmailController->deleteByName('fracturer@outlook.com');

            $email_str = $account_information[ 'person_email' ];

            $mail = $EmailController->find( $email_str );

            if( is_null( $mail ) )
            {
                $mail = $EmailController->create( $email_str );
            }

            $account_create_fields = array();
            $account_create_fields['email_id'] = $mail->id;
            $account_create_fields['name'] = $account_information[ 'person_name' ];
            $account_create_fields['username'] = $account_information[ 'username' ];
            $account_create_fields['password'] = Hash::make($account_information['security']['password']);

            $account = User::create( $account_create_fields );



            return response($account, 200);
        }


        public final function update( Request $request )
        {

        }
        

        public final function delete( Request $request )
        {

        }

    }

?>