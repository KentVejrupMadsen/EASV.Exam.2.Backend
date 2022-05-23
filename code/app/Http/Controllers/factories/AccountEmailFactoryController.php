<?php
    namespace App\Http\Controllers\factories;

    use App\Http\Controllers\Controller;
    use App\Models\tables\AccountEmailModel;


    class AccountEmailFactoryController
        extends Controller
    {
        public function exist( String $email ): bool
        {
            if( !is_null( $this->find( $email ) ) )
            {
                return true;
            }

            return false;
        }

        //
        public function find( String $email ): ?AccountEmailModel
        {
            $emailFound = AccountEmailModel::where( 'content', $email )->first();
            return $emailFound;
        }


        public function search( string $by )
        {

        }


        public function create( String $email )
        {
            $fields = array();
            $fields['content'] = $email;

            AccountEmailModel::create( $fields );
        }
    }
?>
