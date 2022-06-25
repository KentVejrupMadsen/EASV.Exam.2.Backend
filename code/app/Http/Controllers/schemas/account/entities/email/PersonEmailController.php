<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\schemas\account\entities\email;

    // External Libraries
    use Illuminate\Http\JsonResponse 
    	as ResponseJson;
    	
    use Illuminate\Http\Request;
    
    use OpenApi\Attributes 
    	as OA;


    // Internal libraries
    use App\Http\Controllers\schemas\account\entities\email\packages\PersonEmailBuilder 
    	as ControllerBuilder;
    	
    use App\Http\Controllers\schemas\account\entities\email\packages\PersonEmailGC 
    	as ControllerGC;
    	
    use App\Http\Controllers\schemas\account\entities\email\packages\PersonEmailStates 
    	as ControllerStates;
    	
    use App\Http\Controllers\templates\ControllerPipeline 
    	as Pipeline;
    	
    use App\Http\Requests\account\entities\email\PersonEmailRequest 
    	as ControllerRequest;
    	
    use App\Models\tables\AccountEmailModel 
    	as Model;


    /**
     * Account Email controller. That are used when getting "ask" by a computer for data.
     */
    #[OA\Schema( title: 'Person Email Controller',
                 description: '',
                 type: self::model_type )]
    class PersonEmailController
        extends Pipeline
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
        
        public const name = 'email';

        // Variables
        private static ?PersonEmailController $controller = null;
        private static ?ControllerBuilder     $builder    = null;
        private static ?ControllerGC          $gc         = null;
        private static ?ControllerStates      $states     = null;


        // functions
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
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {
            if( !$this->hasImplementedCSV() )
            {
                // Not implemented
                abort(501);
            }

            return null;
        }


        /**
         * @param array $request
         * @return ResponseJson
         */
        public final function pipelineTowardJSON( Array $request ): ResponseJson
        {
            if( !$this->hasImplementedJSON() )
            {
                // Not implemented
                abort(501);
            }

            return Response()->json();
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
                abort(501);
            }

            return null;
        }


        // Code
        /**
         * @param ControllerRequest $request
         * @return Model|null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/entities/email/read',
                  tags: [ '1.0.0', 'account-additional' ] )]
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
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_read( ControllerRequest $request ): ?Model
        {
            return $this->read( $request );
        }


        /**
         * @param Request $request
         * @return Model|null
         */
        public final function read( Request $request ): ?Model
        {
            return null;
        }


        /**
         * @param ControllerRequest $request
         * @return false
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/entities/email/delete',
                     tags: [ '1.0.0', 'account-additional' ] )]
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
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_delete( ControllerRequest $request )
        {
            return $this->delete( $request );
        }


        /**
         * @param Request $request
         * @return false
         */
        public final function delete( Request $request )
        {

            return false;
        }


        /**
         * @param ControllerRequest $request
         * @return ResponseJson
         */
        #[OA\Post( path: '/api/1.0.0/accounts/entities/email/create',
                   tags: [ '1.0.0', 'account-additional' ] )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_create( ControllerRequest $request ): ResponseJson
        {
            return $this->create( $request );
        }


        /**
         * @param Request $request
         * @return ResponseJson
         */
        public final function create( Request $request ): ResponseJson
        {

            return Response()->json(null, 200);
        }


        /**
         * @param ControllerRequest $request
         * @return ResponseJson
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/entities/email/update',
                    tags: [ '1.0.0', 'account-additional' ] )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_update( ControllerRequest $request ): ResponseJson
        {
            return $this->update( $request );
        }


        /**
         * @param Request $request
         * @return ResponseJson
         */
        public final function update( Request $request ): ResponseJson
        {
            return Response()->json( null, 200 );
        }


        // Accessors
            // Setters
        /**
         * @param PersonEmailController $controller
         * @return void
         */
        protected static final function setSingleton( PersonEmailController $controller ): void
        {
            self::$controller = $controller;
        }


        /**
         * @param ControllerBuilder $builder
         * @return void
         */
        protected static final function setBuilder( ControllerBuilder $builder ): void
        {
            self::$builder = $builder;
        }


        /**
         * @param ControllerStates $states
         * @return void
         */
        protected static final function setStates( ControllerStates $states ): void
        {
            self::$states = $states;
        }


        /**
         * @param ControllerGC $gc
         * @return void
         */
        protected static final function setGc( ControllerGC $gc ): void
        {
            self::$gc = $gc;
        }

            // Getters
        /**
         * @return PersonEmailController
         */
        public static final function getSingleton(): PersonEmailController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton(
                    new PersonEmailController()
                );
            }

            return self::$controller;
        }


        /**
         * @return ControllerStates
         */
        protected static final function getStates(): ControllerStates
        {
            if( is_null( self::$states ) )
            {
                self::setStates(
                    ControllerStates::getSingleton()
                );
            }

            return self::$states;
        }


        /**
         * @return ControllerBuilder
         */
        protected static final function getBuilder(): ControllerBuilder
        {
            if( is_null( self::$builder ) )
            {
                self::setBuilder(
                    ControllerBuilder::getSingleton()
                );
            }

            return self::$builder;
        }


        /**
         * @return ControllerGC
         */
        protected static final function getGc(): ControllerGC
        {
            if( is_null( self::$gc ) )
            {
                self::setGc(
                    ControllerGC::getSingleton()
                );
            }

            return self::$gc;
        }
    }
?>
