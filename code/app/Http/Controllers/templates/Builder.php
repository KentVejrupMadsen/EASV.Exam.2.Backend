<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     */
    namespace App\Http\Controllers\templates;


    /**
     * Creation of several models in a specific schema and retrieval of output
     */
    abstract class Builder
    {
        /**
         * @param array $input
         * @return mixed
         */
        public abstract function createModel( Array $input ): mixed;


        /**
         * @param array $input
         * @return mixed
         */
        public abstract function templateModel( Array $input ): mixed;


        /**
         * @param array $array
         * @return void
         */
        public abstract function templateModels( Array $array ): void;


        /**
         * @param array $array
         * @return void
         */
        public abstract function creationOfModels( Array $array ): void;


        /**
         * @return array|null
         */
        public abstract function retrieveOutputResults(): ?array;


        /**
         * @return mixed
         */
        public abstract function retrieveSingular(): mixed;
    }
?>