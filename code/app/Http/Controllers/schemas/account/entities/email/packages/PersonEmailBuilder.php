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


        /**
         * @param array $input
         * @return mixed
         */
        public final function templateModel( array $input ): mixed
        {
            if( array_key_exists(
                $this->getMakeTemplatesOperation(), $input ) )
            {

            }

            return null;
        }


        /**
         * @param array $input
         * @return array|null
         */
        public final function createModel( array $input ): ?array
        {
            $isArray = $this->hasInputArrayCreationKey( $input );

            if( $isArray )
            {

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

            if( $isArray )
            {

            }
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
        }



        /**
         * @return array|null
         */
        public final function retrieveOutputResults(): ?array
        {

            return null;
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
            // Deletes the entire array
            unset( $this->buffer );

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
         * @param array $input
         * @param string $key
         * @return bool
         */
        protected final function isInputAnArray( array $input, string $key ) : bool
        {
            $value = false;

            if( is_array( $input[ $key ] ) )
            {
                $value = true;
            }

            return $value;
        }


        /**
         * @param array $input
         * @param string $key
         * @return bool
         */
        protected final function hasInputArrayKey( array $input, string $key ): bool
        {
            $value = false;

            if( array_key_exists( $key, $input ) )
            {
                $value = true;
            }

            return $value;
        }


        /**
         * @param array $input
         * @return bool
         */
        protected final function hasInputArrayCreationKey( array $input ): bool
        {
            return $this->hasInputArrayKey( $input, $this->getCreateOperation() );
        }


        /**
         * @param array $input
         * @return bool
         */
        protected final function hasInputArrayMakeTemplateKey( array $input ): bool
        {
            return $this->hasInputArrayKey( $input, $this->getMakeTemplatesOperation() );
        }
    }
?>