<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http;

    use Illuminate\Http\Request;

    use Illuminate\Support\Str;
    use OpenApi\Attributes
        as OA;

    use App\Http\Controllers\factories\AccountEmailFactoryController;
    use App\Models\tables\AccountEmailModel;


    /**
     *
     */
    class AccountEmailController 
        extends BaseHTTPController
    {
        /**
         * 
         */
        function __construct()
        {
            parent::__construct();
            $this->factory = new AccountEmailFactoryController();
        }


        // key headers
        private const AccountKey    = 'account';
        private const NewsletterKey = 'newsletter';
        private const MainKey       = 'email';

        private $factory = null;


        /**
         * Pipeline function:
         * @param Request $request
         * @return AccountEmailModel|null
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function read( Request $request ): ?AccountEmailModel
        {
            // Chose format -> later
            return $this->identifyRequest( $request );
        }


        /**
         * Makes a decission about what type of request it is and how to handle it.
         * @param Request $request
         * @return AccountEmailModel|null
         */
        protected function identifyRequest( Request $request ): ?AccountEmailModel
        {
            if( $request->has( self::MainKey ) )
            {
                $email = $request->input( self::MainKey );
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
            $accountEmail = $account['person']['email'];

            $found = AccountEmailModel::where( 'content', $accountEmail )
                                      ->first();

            if( is_null( $found ) )
            {

            }

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


        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function delete( Request $request )
        {
            // TODO: Implement delete() method.
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $emailRequest ): ?AccountEmailModel
        {
            $emailString = $emailRequest->input('account' )[ 'person' ][ 'email' ];

            $emailString = Str::lower( $emailString );

            $input = array();
            $input[ 'content' ] = $emailString;

            $model = AccountEmailModel::create( $input );

            return $model;
        }



        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $emailRequest ): bool
        {


            return true;
        }

      
        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function find( Request $requestEmail ): ?AccountEmailModel
        {
            $input = $requestEmail->input('account' )[ 'person' ][ 'email' ];
            $emailVar = Str::lower( $input );

            $emailModel = AccountEmailModel::where( 'content', $emailVar )->first();

            return $emailModel;
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
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