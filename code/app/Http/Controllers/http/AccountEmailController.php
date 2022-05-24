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


    // Templates
    interface ControllerType
    {
        public function getCase();

        public function pushRead( Request $request );
        public function pushUpdate( Request $request );
        public function pushDelete( Request $request );
        public function pushCreate( Request $request );
    }


    abstract class ControllerCase
        implements ControllerType
    {
        private $case = null;
        private $factory = null;

        // Accessors
        public function setFactory( AccountEmailFactoryController $factory )
        {
            $this->factory = $factory;
        }

        public function getFactory(): ?AccountEmailFactoryController
        {
            return $this->factory;
        }

        /**
         * @return string|null
         */
        public final function getCase(): ?string
        {
            return $this->case;
        }

        /**
         * @param string $value
         * @return void
         */
        protected final function setCase( string $value )
        {
            $this->case = $value;
        }

        // Functions
        /**
         * @param Request $request
         * @return void
         */
        public final function pushRead( Request $request )
        {
            if( $request->has( $this->getCase() ) )
            {
                $content = $request->input( $this->getCase() );
                $this->callbackRead( $content );
            }

        }


        /**
         * @param Request $request
         * @return void
         */
        public final function pushCreate( Request $request )
        {
            if( $request->has( $this->getCase() ) )
            {
                $content = $request->input( $this->getCase() );
                $this->callbackCreate( $content );
            }
        }


        /**
         * @param Request $request
         * @return void
         */
        public final function pushDelete( Request $request )
        {
            if( $request->has( $this->getCase() ) )
            {
                $content = $request->input( $this->getCase() );
                $this->callbackDelete( $content );
            }
        }

        /**
         * @param Request $request
         * @return void
         */
        public final function pushUpdate( Request $request )
        {
            if( $request->has( $this->getCase() ) )
            {
                $content = $request->input( $this->getCase() );
                $this->callbackUpdate( $content );
            }
        }

        public abstract function callbackRead( Array $Content );
        public abstract function callbackDelete( Array $Content );
        public abstract function callbackUpdate( Array $Content );
        public abstract function callbackCreate( Array $Content );
    }

    class AccountCase
        extends ControllerCase
    {
        private const AccountKey    = 'account';

        public function __construct( AccountEmailFactoryController $factory )
        {
            $this->setCase(self::AccountKey );
            $this->setFactory( $factory );
        }

        public function callbackRead( array $Content )
        {
            // TODO: Implement callbackRead() method.
        }

        public function callbackCreate( array $Content )
        {
            // TODO: Implement callbackCreate() method.
        }

        public function callbackDelete( array $Content )
        {
            // TODO: Implement callbackDelete() method.
        }

        public function callbackUpdate( array $Content )
        {
            // TODO: Implement callbackUpdate() method.
        }
    }

    class NewsletterCase
        extends ControllerCase
    {
        public function __construct( AccountEmailFactoryController $factory )
        {
            $this->setCase( self::NewsletterKey );
            $this->setFactory( $factory );
        }

        private const NewsletterKey = 'newsletter';

        public function callbackRead( array $Content )
        {
            // TODO: Implement callbackRead() method.
        }

        public function callbackCreate( array $Content )
        {
            // TODO: Implement callbackCreate() method.
        }

        public function callbackUpdate( array $Content )
        {
            // TODO: Implement callbackUpdate() method.
        }

        public function callbackDelete( array $Content )
        {
            // TODO: Implement callbackDelete() method.
        }

    }

    class MainCase
        extends ControllerCase
    {
        public function __construct( AccountEmailFactoryController $factory )
        {
            $this->setCase( self::MainKey );
            $this->setFactory( $factory );
        }

        private const MainKey = 'email';

        public function callbackRead(array $Content)
        {
            // TODO: Implement callbackRead() method.
        }

        public function callbackCreate(array $Content)
        {
            // TODO: Implement callbackCreate() method.
        }

        public function callbackUpdate(array $Content)
        {
            // TODO: Implement callbackUpdate() method.
        }

        public function callbackDelete(array $Content)
        {
            // TODO: Implement callbackDelete() method.
        }
    }

    // Code
    /**
     * Account Email controller. That are used when getting "ask" by a computer for data.
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
        }

        private $newsletterCase = null;
        private $accountCase    = null;
        private $mainCase       = null;

        private $factory = null;

        // Accessors
        protected final function setFactory( AccountEmailFactoryController $factory )
        {
            $this->factory = $factory;
        }

        protected final function getFactory(): AccountEmailFactoryController
        {
            if( is_null( $this->factory ) )
            {
                $this->setFactory( new AccountEmailFactoryController() );
            }

            return $this->factory;
        }

        public function getNewsletterCase()
        {
            if( is_null( $this->newsletterCase ) )
            {
                $case = new NewsletterCase( $this->getFactory() );
                $this->setNewsletterCase( $case );
            }

            return $this->newsletterCase;
        }

        public function setNewsletterCase( NewsletterCase $value )
        {
            $this->newsletterCase= $value;
        }

        public function getAccountCase(): AccountCase
        {
            if( is_null( $this->accountCase ) )
            {
                $case = new AccountCase( $this->getFactory() );
                $this->setAccountCase( $case );
            }

            return $this->accountCase;
        }

        public function setAccountCase( AccountCase $value )
        {
            $this->accountCase = $value;
        }

        public function getMainCase(): MainCase
        {
            if( is_null( $this->mainCase ) )
            {
                $case = new MainCase( $this->getFactory() );
                $this->setMainCase( $case );
            }

            return $this->mainCase;
        }

        protected function setMainCase( MainCase $value )
        {
            $this->mainCase = $value;
        }

        /**
         * Pipeline function:
         * @param Request $request
         * @return AccountEmailModel|null
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function read( Request $request ): ?AccountEmailModel
        {
            abort(300);
        }






        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function delete( Request $request )
        {
            // TODO: Implement delete() method.
            abort(300);
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $emailRequest ): ?AccountEmailModel
        {

            abort(300);
        }



        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $emailRequest ): bool
        {


            abort(300);
        }


      
        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function find( Request $requestEmail ): ?AccountEmailModel
        {


            abort(300);
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function exist( Request $requestEmail ): bool
        {


            abort(300);
        }
    }


?>