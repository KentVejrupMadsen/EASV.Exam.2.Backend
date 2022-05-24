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

        public function pushRead( Request $request ): ?AccountEmailModel;
        public function pushUpdate( Request $request ): ?AccountEmailModel;
        public function pushDelete( Request $request ): bool;
        public function pushCreate( Request $request ): ?AccountEmailModel;
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
         * @return AccountEmailModel|null
         */
        public final function pushRead( Request $request ): ?AccountEmailModel
        {
            if( $request->has( $this->getCase() ) )
            {
                $content = $request->input( $this->getCase() );
                return $this->callbackRead( $content );
            }

            return null;
        }
        /**
         * @param Request $request
         * @return AccountEmailModel|null
         */
        public final function pushCreate( Request $request ): ?AccountEmailModel
        {
            if( $request->has( $this->getCase() ) )
            {
                $content = $request->input( $this->getCase() );
                return $this->callbackCreate( $content );
            }

            return null;
        }
        /**
         * @param Request $request
         * @return bool
         */
        public final function pushDelete( Request $request ): bool
        {
            if( $request->has( $this->getCase() ) )
            {
                $content = $request->input( $this->getCase() );
                return $this->callbackDelete( $content );
            }

            return false;
        }
        /**
         * @param Request $request
         * @return AccountEmailModel|null
         */
        public final function pushUpdate( Request $request ): ?AccountEmailModel
        {
            if( $request->has( $this->getCase() ) )
            {
                $content = $request->input( $this->getCase() );
                return $this->callbackUpdate( $content );
            }

            return null;
        }


        /**
         * @param array $Content
         * @return AccountEmailModel|null
         */
        public abstract function callbackRead( Array $Content ): ?AccountEmailModel;
        /**
         * @param array $Content
         * @return bool
         */
        public abstract function callbackDelete( Array $Content ): bool;
        /**
         * @param array $Content
         * @return AccountEmailModel|null
         */
        public abstract function callbackUpdate( Array $Content ): ?AccountEmailModel;
        /**
         * @param array $Content
         * @return AccountEmailModel|null
         */
        public abstract function callbackCreate( Array $Content ): ?AccountEmailModel;
    }


    /**
     *
     */
    class AccountCase
        extends ControllerCase
    {
        private const AccountKey    = 'account';

        public function __construct( AccountEmailFactoryController $factory )
        {
            $this->setCase(self::AccountKey );
            $this->setFactory( $factory );
        }

        public function callbackRead( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackRead() method.
            return null;
        }

        public function callbackCreate( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackCreate() method.
            return null;
        }

        public function callbackDelete( array $Content ): bool
        {
            // TODO: Implement callbackDelete() method.
            return false;
        }

        public function callbackUpdate( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackUpdate() method.
            return null;
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

        public function callbackRead( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackRead() method.
            return null;
        }

        public function callbackCreate( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackCreate() method.
            return null;
        }

        public function callbackUpdate( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackUpdate() method.
            return null;
        }

        public function callbackDelete( array $Content ): bool
        {
            // TODO: Implement callbackDelete() method.
            return false;
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

        public function callbackRead( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackRead() method.
            return null;
        }

        public function callbackCreate( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackCreate() method.
            return null;
        }

        public function callbackUpdate( array $Content ): ?AccountEmailModel
        {
            // TODO: Implement callbackUpdate() method.
            return null;
        }

        public function callbackDelete( array $Content ): bool
        {
            // TODO: Implement callbackDelete() method.
            return false;
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

        // Variables
        private $newsletterCase = null;
        private $accountCase    = null;
        private $mainCase       = null;

        private $factory        = null;


        // Accessors
        /**
         * @param AccountEmailFactoryController $factory
         * @return void
         */
        protected final function setFactory( AccountEmailFactoryController $factory ): void
        {
            $this->factory = $factory;
        }


        /**
         * @return AccountEmailFactoryController
         */
        protected final function getFactory(): AccountEmailFactoryController
        {
            if( is_null( $this->factory ) )
            {
                $this->setFactory( new AccountEmailFactoryController() );
            }

            return $this->factory;
        }


        /**
         * @return NewsletterCase
         */
        public function getNewsletterCase(): NewsletterCase
        {
            if( is_null( $this->newsletterCase ) )
            {
                $case = new NewsletterCase( $this->getFactory() );
                $this->setNewsletterCase( $case );
            }

            return $this->newsletterCase;
        }


        /**
         * @param NewsletterCase $value
         * @return void
         */
        public function setNewsletterCase( NewsletterCase $value ): void
        {
            $this->newsletterCase = $value;
        }


        /**
         * @return AccountCase
         */
        public function getAccountCase(): AccountCase
        {
            if( is_null( $this->accountCase ) )
            {
                $case = new AccountCase( $this->getFactory() );
                $this->setAccountCase( $case );
            }

            return $this->accountCase;
        }


        /**
         * @param AccountCase $value
         * @return void
         */
        public function setAccountCase( AccountCase $value ): void
        {
            $this->accountCase = $value;
        }


        /**
         * @return MainCase
         */
        public function getMainCase(): MainCase
        {
            if( is_null( $this->mainCase ) )
            {
                $case = new MainCase( $this->getFactory() );
                $this->setMainCase( $case );
            }

            return $this->mainCase;
        }


        /**
         * @param MainCase $value
         * @return void
         */
        protected function setMainCase( MainCase $value ): void
        {
            $this->mainCase = $value;
        }


        /**
         * @param AccountEmailModel|null $value
         * @return bool
         */
        protected function isNotEmpty( ?AccountEmailModel $value ): bool
        {
            if( !is_null( $value ) )
            {
                return true;
            }

            return false;
        }

        // Code
        /**
         * Pipeline function:
         * @param Request $request
         * @return AccountEmailModel|null
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function read( Request $request ): ?AccountEmailModel
        {
            $response = $this->getAccountCase()
                             ->pushRead( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }

            $response = $this->getMainCase()
                             ->pushRead( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }

            $response = $this->getNewsletterCase()
                             ->pushRead( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }

            abort(300);
        }






        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function delete( Request $request ): bool
        {
            $response = $this->getAccountCase()
                             ->pushDelete( $request );
            if( $response )
            {
                return true;
            }

            $response = $this->getMainCase()
                             ->pushDelete( $request );
            if( $response )
            {
                return true;
            }

            $response = $this->getNewsletterCase()
                             ->pushDelete( $request );
            if( $response )
            {
                return true;
            }

            abort(300);
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request ): ?AccountEmailModel
        {
            $response = $this->getAccountCase()
                             ->pushCreate( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }

            $response = $this->getMainCase()
                             ->pushCreate( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }

            $response = $this->getNewsletterCase()
                             ->pushCreate( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }

            abort(300);
        }



        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $request ): ?AccountEmailModel
        {
            $response = $this->getAccountCase()
                             ->pushUpdate( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }

            $response = $this->getMainCase()
                             ->pushUpdate( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }

            $response = $this->getNewsletterCase()
                             ->pushUpdate( $request );
            if( $this->isNotEmpty( $response ) )
            {
                return $response;
            }


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