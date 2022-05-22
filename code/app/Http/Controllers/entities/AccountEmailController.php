<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\entities;

    use App\Http\Controllers\templates\Controller;
    use App\Http\Controllers\templates\CrudController;
    use App\Models\tables\AccountEmailModel;

    use Illuminate\Http\Request;


    use Illuminate\Support\Str;
    use phpDocumentor\Reflection\Types\Boolean;


    // Convert to CRUD Interface
    class AccountEmailController 
        extends CrudController
    {
        /**
         * 
         */
        function __construct()
        {
            
        }

        private const AccountKey = 'account';
        private const NewsletterKey = 'newsletter';

        public function read( Request $request ): ?AccountEmailModel
        {
            // TODO: Implement read() method.

            return null;
        }


        public function delete( Request $request )
        {
            // TODO: Implement delete() method.
        }


        /**
         * 
         */
        public final function create( Request $emailRequest ): ?AccountEmailModel
        {


            return null;
        }



        /**
         * 
         */
        public final function update( Request $emailRequest ): bool
        {


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