<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
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
         * @param array $input
         * @return void
         */
        public abstract function templateModels( Array $input ): void;


        /**
         * @param array $input
         * @return void
         */
        public abstract function creationOfModels( Array $input ): void;


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
