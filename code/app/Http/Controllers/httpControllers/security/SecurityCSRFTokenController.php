<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\security;

    // External libraries
    use App\Http\Controllers\formatControllers\json\CSRFResponseJSONFactory;
    use Carbon\Carbon;

    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;


    // Internal libraries
    use App\Http\Controllers\cacheControllers\security\RedisCacheCSRFController;
    use App\Http\Controllers\templates\ControllerMessages;
    use App\Http\Controllers\templates\CrudController;

    use App\Http\Requests\security\SecurityCSRFRequest;

    use App\Models\security\CSRFModel;


    /**
     * 
     */
    class SecurityCSRFTokenController
        extends CrudController
    {
        // Variables
        private static ?SecurityCSRFTokenController $controller = null;

        private ?RedisCacheCSRFController $cache       = null;
        private ?CSRFResponseJSONFactory  $jsonFactory = null;

        private int $tokenLength = 64;


        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            if( $this->isCacheEmpty() )
            {
                $this->setCache( RedisCacheCSRFController::getSingleton() );
            }

            if( $this->isJsonFactoryEmpty() )
            {
                $this->setJsonFactory( CSRFResponseJSONFactory::getSingleton() );
            }

            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        protected final function setJsonFactory( CSRFResponseJSONFactory $factory )
        {
            $this->jsonFactory = $factory;
        }

        protected final function getJsonFactory(): CSRFResponseJSONFactory
        {
            return $this->jsonFactory;
        }

        protected final function isJsonFactoryEmpty()
        {
            return is_null( $this->jsonFactory );
        }

        /**
         * @param CSRFModel $model
         * @return void
         */
        protected final function isModelInvalid( CSRFModel $model ): void
        {
            if( $model->invalidated )
            {
                abort( ControllerMessages::unAuthorized );
            }
        }

        /**
         * @param CSRFModel $model
         * @return void
         */
        protected final function isModelAlreadyAccessed( CSRFModel $model ): void
        {
            if( is_null( $model->accessed ) )
            {
                abort( ControllerMessages::conflict );
            }
        }


        /**
         * @param CSRFModel $model
         * @param Request $request
         * @return void
         */
        protected final function validateActorAddress( CSRFModel $model,
                                                       Request   $request ): void
        {
            if( !$model->assigned_to == $request->ip() )
            {
                $model->accessed = Carbon::now();
                $model->invalidated = true;

                $model->save();

                abort(ControllerMessages::forbidden );
            }
        }

        protected final function validateSecureToken( CSRFModel $model,
                                                      string $secureTokenInput ): void
        {
            if( !( $model->secure_token == $secureTokenInput ) )
            {
                abort( ControllerMessages::preConditionFailed );
            }
        }


        // Functions that the routes interacts with
        /**
         * @param SecurityCSRFRequest $request
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function access( SecurityCSRFRequest $request )
        {
            // Variables
            $response = array();

            $requestInput = $request->input('security' );

            $csrfInput = $requestInput[ 'csrf' ];

            $reqId = $csrfInput[ 'id' ];
            $secureTokenFromRequest = $csrfInput[ 'secure_token' ];

            $foundFromDB = CSRFModel::findOrFail( $reqId );

            $this->isModelInvalid( $foundFromDB );
            $this->isModelAlreadyAccessed( $foundFromDB );

            $this->validateActorAddress( $foundFromDB,
                                         $request );

            $this->validateSecureToken( $foundFromDB,
                                        $secureTokenFromRequest );

            if( $this->validateSecret( $foundFromDB, $this->retrieveSecret( $foundFromDB ) ) )
            {
                $response = self::generateAccessResponse( $foundFromDB->id,
                                                          $foundFromDB->accessed,
                                                          $foundFromDB->issued );
            }
            else
            {
                $foundFromDB->accessed = Carbon::now();
                $foundFromDB->invalidated = true;
                $foundFromDB->save();
            }

            return response( $response , 200 );
        }

        protected function retrieveSecret( CSRFModel $model ): string
        {
            $returnValue = '';
            //$pullSecret =  $request->session()->pull('secret_token' );
            return $returnValue;
        }


        protected function validateSecret( CSRFModel $fromDB, string $secret ): bool
        {
            if( $fromDB->secret_token == $secret )
            {
                $fromDB->accessed  = Carbon::now();
                $fromDB->activated = true;
                $fromDB->save();

                return true;
            }

            return false;
        }


        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicRead( SecurityCSRFRequest $Request )
        {
            $this->read( $Request );
        }


        /**
         * @param Request $request
         * @return void
         */
        public function read( Request $request )
        {
            // TODO: Implement read() method.
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return JsonResponse
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function publicCreate( SecurityCSRFRequest $Request )
        {
            return $this->create( $Request );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function create( Request $request )
        {
            $model = $this->generateCSRFModel( $request );

            $responseModel = self::generateCreateResponse( $model->id,
                                                           $model->secure_token );

            $this->getCache()->create( $model );

            return response()->json( $responseModel );
        }


        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicUpdate( SecurityCSRFRequest $Request )
        {
            $this->update( $Request );
        }


        /**
         * @param Request $request
         * @return void
         */
        public function update( Request $request )
        {

        }

        protected final static function getCSRFBodyFromInput( Request $request ): array
        {
            return $request->input( 'security.csrf' );
        }

        /**
         * @param SecurityCSRFRequest $request
         * @return JsonResponse
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function reset( SecurityCSRFRequest $request )
        {
            $csrf_input = self::getCSRFBodyFromInput( $request );

            $foundFromDB = CSRFModel::find( $csrf_input[ 'id' ] )->firstOrFail();
            $foundFromDB = $this->resetModel( $foundFromDB );


            return response()->json( $foundFromDB );
        }


        /**
         * @param CSRFModel $model
         * @return CSRFModel
         */
        protected function resetModel( CSRFModel $model ): CSRFModel
        {
            $m = $model;

            $m->issued = Carbon::now();
            $m->secure_token = $this->generateToken();
            $m->secret_token = $this->generateToken();

            $m->save();

            return $m;
        }


        public final function invalidateOld()
        {

        }


        /**
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function invalidateAll()
        {
            CSRFModel::where( 'invalidated', '=', '0' )->update(
                array( 'invalidated' => 1 )
            );
        }


        //
        /**
         * @param SecurityCSRFRequest $Request
         * @return void
         */
        public function publicDelete( SecurityCSRFRequest $Request )
        {
            $this->delete( $Request );
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete( Request $request )
        {

        }


        // Grouped functions internally
        protected final function generateCSRFModel( Request $request ): ?CSRFModel
        {
            $inputModel = self::generateInputModel(
                $request->ip(),
                $this->generateToken(),
                $this->generateToken(),
                false,
                false
            );

            $model = CSRFModel::create( $inputModel );
            return $model;
        }

        /**
         * @param array $values
         * @return void
         */
        protected final function deleteGroup( array $values )
        {
            $idx = null;

            for( $idx = 0;
                 $idx < sizeof( $values );
                 $idx++ )
            {
                $current_id = $values[ $idx ];

                $model = CSRFModel::findOrFail( $current_id );
                $model->delete();
            }
        }


        /**
         * @param int $id
         * @param string $secure_token
         * @return \array[][]
         */
        protected static function generateCreateResponse( int $id, string $secure_token ): array
        {
            $response =
                [
                    'security' =>
                        [
                            'csrf' =>
                                [
                                    'id' => $id,
                                    'secure_token' => $secure_token
                                ]
                        ]
                ];

            return $response;
        }


        /**
         * @param string $ipAssignedTo
         * @param string $secureToken
         * @param string $secretToken
         * @param bool $activated
         * @param bool $invalidated
         * @return array
         */
        protected static function generateInputModel( string $ipAssignedTo,
                                                      string $secureToken,
                                                      string $secretToken,
                                                      bool $activated,
                                                      bool $invalidated ): array
        {
            $inputModel =
                [
                    'assigned_to'   => $ipAssignedTo,
                    'secure_token'  => $secureToken,
                    'secret_token'  => $secretToken,
                    'activated'     => $activated,
                    'invalidated'   => $invalidated
                ];

            return $inputModel;
        }


        /**
         * @return array
         */
        protected static function generateResetResponse(): array
        {
            $response =
                [

                ];

            return $response;
        }


        /**
         * @param int $id
         * @param Carbon $accessed
         * @param Carbon $issued
         * @return \array[][]
         */
        protected static function generateAccessResponse( int $id,
                                                          Carbon $accessed,
                                                          Carbon $issued ): array
        {
            $response =
            [
                'security' =>
                [
                    'csrf' =>
                    [
                        'id'        => $id,
                        'accessed'  => $accessed,
                        'issued'    => $issued
                    ]
                ]
            ];

            return $response;
        }


        /**
         * @return array
         */
        protected static function generateInvalidateResponse(): array
        {
            $response =
                [

                ];

            return $response;
        }


        // Accessors
        /**
         * @param SecurityCSRFTokenController $controller
         * @return void
         */
        public static final function setSingleton( SecurityCSRFTokenController $controller )
        {
            self::$controller = $controller;
        }

        /**
         * @return SecurityCSRFTokenController
         */
        public static final function getSingleton(): SecurityCSRFTokenController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new SecurityCSRFTokenController() );
            }

            return self::$controller;
        }

        /**
         * @return RedisCacheCSRFController
         */
        protected final function getCache(): RedisCacheCSRFController
        {
            return $this->cache;
        }


        /**
         * @param RedisCacheCSRFController $cacheController
         * @return void
         */
        protected final function setCache( RedisCacheCSRFController $cacheController ): void
        {
            $this->cache = $cacheController;
        }


        /**
         * @return bool
         */
        protected final function isCacheEmpty(): bool
        {
            return is_null( $this->cache );
        }

        /**
         * @return int
         */
        public final function getTokenLength(): int
        {
            return $this->tokenLength;
        }


        /**
         * @param int $tokenNewLength
         * @return void
         */
        protected final function setTokenLength( int $tokenNewLength ): void
        {
            $this->tokenLength = $tokenNewLength;
        }


        /**
         * @return string
         */
        protected final function generateToken(): string
        {
            return self::randomToken( $this->getTokenLength() );
        }


        /**
         * @param int $size
         * @return string
         */
        protected final static function randomToken( int $size ): string
        {
            return Str::random( $size );
        }
    }
?>