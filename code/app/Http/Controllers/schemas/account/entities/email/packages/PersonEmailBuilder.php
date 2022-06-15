<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\email\packages;

    use App\Models\tables\AccountEmailModel
        as Model;

    use App\Http\Controllers\templates\Builder;


    /**
     *
     */
    class PersonEmailBuilder
        extends Builder
    {
        /**
         *
         */
        public function __construct()
        {

        }


        // Variables
        private static ?PersonEmailBuilder $singleton = null;
        private ?array $buffer                        = null;

        private const create_operation = 'create';
        private const update_operation = 'update';

        private const make_templates_operation = 'templates';
        private const field_content = 'content';


        /**
         * @param array $input
         * @return mixed
         */
        public final function templateModel( array $input ): mixed
        {
            $isArray = $this->hasInputArrayMakeTemplateKey( $input );

            if( $isArray )
            {

            }

            return null;
        }


        /**
         * @param array $input
         * @return void
         */
        public final function templateModels( array $input ): void
        {
            $isArray = $this->hasInputArrayMakeTemplateKey( $input );

            if( $isArray )
            {
            }

            return;
        }


        /**
         * @param array $input
         * @return array|null
         */
        public final function createModel( array $input ): ?Model
        {
            $isArray = $this->hasInputArrayCreationKey( $input );

            if( $isArray )
            {
                $valueIsString = is_string(
                                    $input[ $this->getCreateOperation() ]
                );

                if( $valueIsString )
                {
                    $currentString = $input[ $this->getCreateOperation() ];
                    $inputForm = $this->makeEloquentModel( $currentString );

                    $madeModel = Model::create( $inputForm );
                    $this->appendToBuffer( $madeModel );
                }
                else
                {
                    abort( 'expects string' );
                }
            }

            return null;
        }


        /** Creates multiple persistence data in the database and returns them as models in the output file
         * @param array $input
         * @return void
         */
        public final function creationOfModels( array $input ): void
        {
            $isArray = $this->hasInputArrayCreationKey( $input );
            $modelsCreated = null;

            if( $isArray )
            {
                $array = $input[ $this->getCreateOperation() ];
                $modelsToBeInserted = $this->convertToEloquentModels( $array );
                $sizeOfModels = count( $modelsToBeInserted );

                for( $index = 0;
                     $index < $sizeOfModels;
                     $index++ )
                {
                    $current = $modelsToBeInserted[ $index ];
                    fwrite(STDERR, print_r($current, true));

                    $justCreated = Model::create( $current );
                    $this->appendToBuffer( $justCreated );
                }
            }

            // Appends the current result to the buffer
            if( isset( $modelsCreated ) )
            {
                $this->appendToBuffer( $modelsCreated );
            }
        }


        /**
         * @param array $inputArr
         * @return array
         */
        private function convertToEloquentModels( array $inputArr ): array
        {
            $retVal = array();
            $sizeOfArray = count( $inputArr );

            for( $index = 0;
                 $index < $sizeOfArray;
                 $index++ )
            {
                $currentIndexString = $inputArr[ $index ];
                $el = $this->makeEloquentModel( $currentIndexString );

                array_push( $retVal, $el );
            }

            return $retVal;
        }


        /**
         * @return array|null
         */
        public final function retrieveOutputResults(): ?array
        {
            $retArray = $this->getBuffer();
            $this->resetBuffer();

            return $retArray;
        }


        /**
         * @return Model|null
         */
        public final function retrieveSingular(): ?Model
        {


            return null;
        }


        /** Empties the buffer by replacing the array with an empty one
         * @return array
         */
        public final function resetBuffer(): array
        {
            $this->setBuffer( array() );

            return $this->getBuffer();
        }


        // Accessors
            // Getters
        /**
         * @return PersonEmailBuilder
         */
        public static final function getSingleton(): PersonEmailBuilder
        {
            if( is_null( self::$singleton ) )
            {
                self::setSingleton(
                    new PersonEmailBuilder()
                );
            }

            return self::$singleton;
        }


        /**
         * @return array
         */
        public final function getBuffer(): array
        {
            if( is_null( $this->buffer ) )
            {
                $this->setBuffer( array() );
            }

            return $this->buffer;
        }


            // Setters
        /**
         * @param PersonEmailBuilder $singleton
         * @return void
         */
        protected static final function setSingleton( PersonEmailBuilder $singleton ): void
        {
            self::$singleton = $singleton;
        }


        /**
         * @param array $buffer
         * @return void
         */
        protected final function setBuffer( array $buffer ): void
        {
            $this->buffer = $buffer;
        }


        /**
         * @return string
         */
        public final function getCreateOperation(): string
        {
            return self::create_operation;
        }


        /**
         * @return string
         */
        public final function getUpdateOperation(): string
        {
            return self::update_operation;
        }


        /**
         * @return string
         */
        public final function getMakeTemplatesOperation(): string
        {
            return self::make_templates_operation;
        }


        /**
         * @return string
         */
        public final function getContentField(): string
        {
            return self::field_content;
        }


        /**
         * @param string $emailValue
         * @return string[]
         */
        protected final function makeEloquentModel( string $emailValue ): array
        {
            return
            [
                $this->getContentField() => $emailValue
            ];
        }


        /**
         * @param array $input
         * @param string $key
         * @return bool
         */
        protected final function isValueInInputAnArray( array $input, string $key ): bool
        {
            return is_array( $input[ $key ] );
        }


        /**
         * @param array $input
         * @param string $key
         * @return bool
         */
        protected final function hasInputArrayKey( array $input, string $key ): bool
        {
            return array_key_exists( $key, $input );
        }


        /**
         * @param array $input
         * @return bool
         */
        protected final function hasInputArrayCreationKey( array $input ): bool
        {
            return $this->isValueInInputAnArray( $input, $this->getCreateOperation() );
        }


        /**
         * @param array $input
         * @return bool
         */
        protected final function hasInputArrayMakeTemplateKey( array $input ): bool
        {
            return $this->isValueInInputAnArray( $input, $this->getMakeTemplatesOperation() );
        }


        /**
         * @param array|null $input
         * @return bool
         */
        protected final function isInputArrayNull( ?array $input ): bool
        {
            return is_null( $input );
        }


        /**
         * @param array $input
         * @return bool
         */
        protected final function isInputArrayEmpty( array $input ): bool
        {
            $val = count( $input );
            return ( $val == 0 );
        }


        /**
         * @param Model $input
         * @return array
         */
        protected final function appendToBuffer( Model $input ): array
        {
            if( is_null( $this->buffer ) )
            {
                $this->setBuffer( array() );
            }

            array_push( $this->buffer, $input );
            return $this->getBuffer();
        }
    }
?>