<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\AccountEmailModel;
use Illuminate\Support\Str;

    class AccountEmailController 
        extends Controller
    {
        public final function create( string $email ): ?AccountEmailModel
        {
            $fields = array();
            $fields['content'] = Str::lower( $email );

            $email = AccountEmailModel::create( $fields );
            return $email;
        }

        public final function update( int $id, string $to ): Boolean
        {
            return false;
        }

        public final function updateByName( string $from, string $to ): Boolean
        {
            return false;
        }

        public final function delete( String $email ): Boolean
        {

            return false;
        }

        //
        public final function find( string $email ): ?AccountEmailModel
        {
            $email = AccountEmailModel::where('content', str::lower($email))->first();

            return $email;
        }


        public final function exist( string $email ): Boolean
        {

            return false;
        }
    }
?>