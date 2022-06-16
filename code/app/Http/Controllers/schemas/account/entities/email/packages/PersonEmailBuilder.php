<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Http\Controllers\schemas\account\entities\email\packages;

    // Internal libraries
    use App\Models\tables\AccountEmailModel
        as Model;

    use App\Http\Controllers\templates\Builder
        as BuilderTemplate;


    /**
     *
     */
    class PersonEmailBuilder
        extends BuilderTemplate
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

        private const field_content = 'content';


        /**
         * @param array $input
         * @return mixed
         */
        public final function templateModel( array $input ): mixed
        {


            return null;
        }


        /**
         * @param array $input
         * @return void
         */
        public final function templateModels( array $input ): void
        {


            return;
        }


        /**
         * @param array $input
         * @return array|null
         */
        public final function createModel( array $input ): ?Model
        {
            $retVal = null;

            $hKey = $this->hasArrayContentKey( $input );

            if( $hKey &&
                $this->isContentKeyAString( $input ) )
            {
                $created = Model::create( $input );
                $retVal = $created;
            }

            return $retVal;
        }


        /**
         * @param array $input
         * @return bool
         */
        protected final function isContentKeyAString( array $input ): bool
        {
            return is_string( $input[ $this->getContentField() ] );
        }


        /** Creates multiple persistence data in the database and returns them as models in the output file
         * @param array $input
         * @return void
         */
        public final function creationOfModels( array $input ): void
        {
            $modelsToBeInserted = $this->convertToEloquentModels( $input );
            $sizeOfModels = count( $modelsToBeInserted );

            for( $index = 0;
                 $index < $sizeOfModels;
                 $index++ )
            {
                $current = $modelsToBeInserted[ $index ];
                $justCreated = Model::create( $current );

                if( isset( $justCreated ) )
                {
                    $this->appendToBuffer( $justCreated );
                }
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

        protected final function hasArrayContentKey( Array $array )
        {
            return array_key_exists( $this->getContent(), $array );
        }

        protected final function getContent(): string
        {
            return self::getContentField();
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