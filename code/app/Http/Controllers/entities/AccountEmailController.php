<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\entities;

    use App\Http\Controllers\templates\Controller;
    use App\Models\tables\AccountEmailModel;

    use Illuminate\Http\Request;


    use Illuminate\Support\Str;


    // Convert to CRUD Interface
    class AccountEmailController 
        extends Controller
    {
        /**
         * 
         */
        function __construct()
        {
            
        }
        

        /**
         * 
         */
        public final function create( Request $emailRequest ): ?AccountEmailModel
        {
            $fields = array();
            $fields['content'] = Str::lower( $email );
            
            $email = AccountEmailModel::create( $fields );

            return $email;
        }



        /**
         * 
         */
        public final function update( Request $emailRequest ): bool
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

      
        /**
         * 
         */
        public final function find( Request $requestEmail ): ?AccountEmailModel
        {
            $emailVar = str::lower( $email );

            $emailModel = AccountEmailModel::where( 'content', $emailVar )->first();

            return $emailModel;
        }


        /**
         * 
         */
        public final function exist( Request $requestEmail ): bool
        {
            if( is_null( $this->find( $email ) ) )
            {
                return false;
            }

            return true;
        }
    }
?>