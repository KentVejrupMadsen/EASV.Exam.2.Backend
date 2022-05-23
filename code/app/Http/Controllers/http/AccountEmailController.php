<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http;

    use App\Http\Controllers\templates\CrudController;
    use App\Models\tables\AccountEmailModel;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;


    /**
     *
     */
    class AccountEmailController 
        extends CrudController
    {
        /**
         * 
         */
        function __construct()
        {
            
        }

        // key headers
        private const AccountKey    = 'account';
        private const NewsletterKey = 'newsletter';
        private const MainKey       = 'email';


        /**
         * Pipeline function:
         * @param Request $request
         * @return AccountEmailModel|null
         */
        public function read( Request $request ): ?AccountEmailModel
        {
            // Chose format -> later
            return $this->identifyRequest( $request );
        }

        /**
         * @param Request $request
         * @return AccountEmailModel|null
         */
        protected function identifyRequest( Request $request ): ?AccountEmailModel
        {
            if( $request->has( self::MainKey ) )
            {
                $email = $request->input(self::MainKey);
                return $this->readEmail( $request, $email );
            }

            if( $request->has( self::AccountKey ) )
            {
                $account = $request->input( self::AccountKey );
                return $this->readAccount( $request, $account );
            }

            if( $request->has( self::NewsletterKey ) )
            {
                $newsletter = $request->input( self::NewsletterKey );
                return $this->readNewsletter( $request, $newsletter );
            }

            abort( 400 );
        }

        /**
         * @param Request $request
         * @param $account
         * @return AccountEmailModel|null
         */
        protected function readAccount( Request $request, $account ): ?AccountEmailModel
        {

            return null;
        }

        /**
         * @param Request $request
         * @param $newsletter
         * @return AccountEmailModel|null
         */
        protected function readNewsletter( Request $request, $newsletter ): ?AccountEmailModel
        {
            return null;
        }

        /**
         * @param Request $request
         * @param $email
         * @return AccountEmailModel|null
         */
        protected function readEmail(Request $request, $email): ?AccountEmailModel
        {
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