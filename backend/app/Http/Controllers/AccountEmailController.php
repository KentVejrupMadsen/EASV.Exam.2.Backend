<?php

    namespace App\Http\Controllers;

    use App\Models\AccountEmailModel;
    
    use Illuminate\Contracts\Validation\Validator;
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


        public final function update( int $id, string $to ): bool
        {
            $emailModel = AccountEmailModel::find( $id );

            if( is_null( $emailModel ) )
            {
                return false;
            }

            $emailModel->content = Str::lower( $to );

            $emailModel->save();

            return true;
        }


        public final function updateByName( string $from, string $to ): bool
        {
            $emailModel = AccountEmailModel::where( 'content', $from )->first();

            if( is_null( ( $emailModel ) ) )
            {
                return false;
            }

            $emailModel->content = Str::lower( $to );
            $emailModel->save();

            return true;
        }


        public final function deleteByName( String $email ): bool
        {
            $emailModel = $this->find( $email );

            if( is_null( $emailModel ) )
            {
                return false;
            }

            $emailModel->forceDelete();

            return true;
        }


        //
        public final function find( string $email ): ?AccountEmailModel
        {
            $emailVar = str::lower( $email );

            $emailModel = AccountEmailModel::where( 'content', $emailVar )->first();

            return $emailModel;
        }


        public final function exist( string $email ): bool
        {
            if( is_null( $this->find( $email ) ) )
            {
                return false;
            }

            return true;
        }
    }
?>