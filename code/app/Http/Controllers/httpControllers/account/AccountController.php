<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\account;

    // External Libraries
    use Carbon\Carbon;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    use OpenApi\Attributes
        as OA;

    // Internal Libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Http\Controllers\formatControllers\json\AccountResponseJSONFactory;
    use App\Http\Controllers\httpControllers\account\entities\PersonEmailController;

    use App\Http\Requests\account\AccountRequest;

    use App\Migrators\AccountMigrator;
    use App\Migrators\PersonEmailMigrator;

    use App\Models\tables\User;
    use App\Models\tables\AccountEmailModel;


    /**
     *
     */
    #[OA\Schema( title: 'Account Controller',
                 description: '',
                 type: 'controller' )]
    class AccountController
        extends ControllerPipeline
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            parent::__construct();

            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        // Variables
        private static ?AccountController           $controller = null;
        private static ?AccountResponseJSONFactory  $responseFactory = null;

        private const contentType = 'Content-Type';


        // implement output
        /**
         * @return bool
         */
        public final function hasImplementedCSV(): bool
        {
            return false;
        }

        /**
         * @return bool
         */
        public final function hasImplementedJSON(): bool
        {
            return true;
        }


        /**
         * @return bool
         */
        public final function hasImplementedXML(): bool
        {

            return false;
        }

        /**
         * @return string
         */
        protected function defaultToContent(): string
        {
            return 'application/json';
        }


        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {
            if( !$this->hasImplementedCSV() )
            {
                // Not implemented
                abort( 501 );
            }

            return null;
        }


        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public final function pipelineTowardJSON( Array $request ): ?JsonResponse
        {
            if( !$this->hasImplementedJSON() )
            {
                // Not implemented
                abort(501);
            }

            return Response()->json( $request );
        }


        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardXML( Array $request ): ?array
        {
            if( !$this->hasImplementedXML() )
            {
                // Not implemented
                abort( 501 );
            }

            return null;
        }


        /**
         * @param AccountRequest $request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/me',
                  tags: ['1.0.0', 'account', 'authentication'] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(example: "<<<JSON"),
                           new OA\XmlContent(example: "")
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function me( AccountRequest $request ): JsonResponse
        {
            $content_type = $request->header( $this->getContentType() );

            if( !isset( $content_type ) )
            {
                $content_type = $this->defaultToContent();
            }

            $response = [];

            $currentUser = $request->user();
            $response[ 'account' ] = $currentUser;

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/read',
                  tags: ['1.0.0', 'account'] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(
                               examples: "<<<JSON " ),
                           new OA\XmlContent(
                               examples: "<<<XML " )
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_read( AccountRequest $request )
        {

            return $this->read( $request );
        }

        /**
         * @param Request $request
         * @return null
         */
        public final function read( Request $request )
        {
            $content_type = $request->header( $this->getContentType() );
            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param Request $request
         * @return JsonResponse|null
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/login',
                   tags: [ '1.0.0', 'account', 'authentication' ]
        )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function login( Request $request )
        {
            $content_type = $request->header( $this->getContentType() );

            if( !isset( $content_type ) )
            {
                $content_type = $this->defaultToContent();
            }

            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/logout',
                  tags:[ '1.0.0', 'account', 'authentication' ]
        )]
        #[OA\SecurityScheme( securityScheme: 'account_logout',
                             type: 'http',
                             name: 'authorization',
                             in: 'header',
                             bearerFormat: 'JWT',
                             scheme: 'Bearer' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function logout( Request $request )
        {
            $content_type = $request->header( $this->getContentType() );

            if( !isset( $content_type ) )
            {
                $content_type = $this->defaultToContent();
            }

            $response = [];

            $user = $request->user();
            $user->currentAccessToken()->delete();

            $response[ 'issued' ] = Carbon::now();
            $response[ 'message' ] = 'tokens revoked';

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/create',
                   description: '',
                   tags: [ '1.0.0', 'account', 'authentication' ]
        )]
        #[OA\RequestBody( description: '',
                          required: true,
                          content: [ new OA\JsonContent(
                              example:
'{
	"account":
	{
		"username":"username",
		"security":
		{
			"password":"password",
			"confirm":"password"
		},
		"person":
		{
			"email":"email@gmail.com"
		}
	}
}' ),
                                     new OA\XmlContent() ])]
        #[OA\Response( response: '201',
                       description: 'Account created',
                       content:
                       [
                           new OA\JsonContent( example:
'{
	"username": "username",
	"bearer_token": "integer|bearer-token-string-herexxxxxx"
}'),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '400',
                       description: 'Bad Request - an account already exist with the given parameters' )]
        #[OA\Response( response: '540',
                       description: 'content not found' )]
        public final function public_create( Request $request )
        {
            return $this->create( $request );
        }


        /**
         * @param array $InputKeys
         * @param AccountEmailModel $mailForm
         * @param string $password
         * @return array
         */
        private function createForm( array $InputKeys,
                                     AccountEmailModel $mailForm,
                                     string $password ): array
        {
            return
            [
                User::field_username => $InputKeys[ User::field_username ],
                User::field_password => $password,
                User::field_email_id => $mailForm[ 'id' ],
                User::field_created_at => Carbon::now(),
                User::field_updated_at => Carbon::now(),
                User::field_settings => array()
            ];
        }


        /**
         * @param Request $request
         * @return JsonResponse|null
         */
        public final function create( Request $request )
        {
            $content_type = $request->header( $this->getContentType() );

            if( !isset( $content_type ) )
            {
                $content_type = $this->defaultToContent();
            }

            $response = [];
            $accountMigrator = self::getConstructor();

            $form = $request->input( 'account' );
            $securityPassword = $request->input( 'account.security.password' );

            // Make private function
            $mailModel = null;

            if( PersonEmailController::hasAccountEmailContainer( $request ) )
            {
                $personContainer = $form[ 'person' ];

                $emailConstructor = PersonEmailMigrator::getSingleton();

                if( !$emailConstructor->hasEmailContainer( $personContainer[ 'email' ] ) )
                {
                    $mailModel = $emailConstructor->createEmail( $personContainer[ 'email' ] );
                }
                else
                {
                    $mailModel = $emailConstructor->retrieveEmail( $personContainer[ 'email' ] );

                    if( $accountMigrator->validateEmailIsUsedWithId( $mailModel->id ) )
                    {
                        abort( 400, message: 'the given email is already taken by another account');
                    }
                }
            }

            if( $accountMigrator->validateUsernameIsUsed( $form[ User::field_username ] ) )
            {
                abort( 400, message: 'the given username is already taken by another account' );
            }

            $account = $accountMigrator->createAccountForm(
                $this::createForm( $form, $mailModel, $securityPassword )
            );

            $token = $accountMigrator->issueBearerToken( $account );

            $response[ 'username' ] = $account->username;
            $response[ 'bearer_token' ] = $token;


            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/account/update',
                    tags: ['1.0.0', 'account' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\SecurityScheme( securityScheme: 'account_update',
                             type: 'http',
                             name: 'authorization',
                             in: 'header',
                             bearerFormat: 'JWT',
                             scheme: 'Bearer' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_update( AccountRequest $request )
        {
            return $this->update( $request );
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function update( Request $request )
        {
            $content_type = $request->header( $this->getContentType() );

            if( !isset( $content_type ) )
            {
                $content_type = $this->defaultToContent();
            }

            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return JsonResponse|null
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/account/delete',
                     tags: ['1.0.0', 'account'] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\SecurityScheme( securityScheme: 'account_deletion',
                             type: 'http',
                             description: '',
                             name: 'authorization',
                             in: 'header',
                             bearerFormat: 'JWT',
                             scheme: 'Bearer' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_delete( AccountRequest $request )
        {

            return $this->delete( $request );
        }


        /**
         * @param Request $request
         * @return JsonResponse|null
         */
        public final function delete( Request $request )
        {
            $content_type = $request->header( $this->getContentType() );

            if( !isset( $content_type ) )
            {
                $content_type = $this->defaultToContent();
            }

            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @param AccountRequest $request
         * @return null
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/verify',
                   tags: [ '1.0.0', 'account', 'authentication' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function verify( AccountRequest $request )
        {
            $content_type = $request->header( $this->getContentType() );

            if( !isset( $content_type ) )
            {
                $content_type = $this->defaultToContent();
            }

            $response = [];

            return $this->Pipeline( $content_type, $response );
        }


        /**
         * @return array
         */
        public final function exposeApiStructure(): array
        {
            return [];
        }

        
        // Accessors
            // Setters
        /**
         * @param AccountController $controller
         * @return void
         */
        public static final function setSingleton( AccountController $controller ): void
        {
            self::$controller = $controller;
        }

            // Getters
        /**
         * @return AccountController
         */
        public static final function getSingleton(): AccountController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new AccountController() );
            }

            return self::$controller;
        }

        /**
         * @return AccountResponseJSONFactory|null
         */
        public final static function getResponseFactory(): ?AccountResponseJSONFactory
        {
            if( is_null( self::$responseFactory ) )
            {
                self::setResponseFactory( AccountResponseJSONFactory::getSingleton() );
            }

            return self::$responseFactory;
        }

        /**
         * @param AccountResponseJSONFactory|null $responseFactory
         */
        public final static function setResponseFactory( ?AccountResponseJSONFactory $responseFactory ): void
        {
            self::$responseFactory = $responseFactory;
        }

        /**
         * @return AccountMigrator|null
         */
        public static final function getConstructor(): ?AccountMigrator
        {
            return AccountMigrator::getSingleton();
        }

        /**
         * @return string
         */
        protected final function getContentType(): string
        {
            return self::contentType;
        }
    }
?>