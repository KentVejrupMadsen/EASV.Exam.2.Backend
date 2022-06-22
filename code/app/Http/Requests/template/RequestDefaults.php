<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Requests\template;


    /**
     *
     */
    final class RequestDefaults
    {
        private const json_filetype = 'application/json';
        private const xml_filetype = 'application/xml';
        private const csv_filetype = 'application/csv';

        private const method_delete = 'DELETE';
        private const method_get = 'GET';
        private const method_patch = 'PATCH';
        private const method_post = 'POST';


        /**
         * @return string
         */
        public final static function getMethodDelete(): string
        {
            return self::method_delete;
        }

        /**
         * @return string
         */
        public final static function getMethodGet(): string
        {
            return self::method_get;
        }

        /**
         * @return string
         */
        public final static function getMethodPatch(): string
        {
            return self::method_patch;
        }

        /**
         * @return string
         */
        public final static function getMethodPost(): string
        {
            return self::method_post;
        }

        /**
         * @return string
         */
        public final static function getJsonFiletypeName(): string
        {
            return self::json_filetype;
        }

        /**
         * @return string
         */
        public final static function getXmlFiletypeName(): string
        {
            return self::xml_filetype;
        }

        /**
         * @return string
         */
        public final static function getCSVFiletypeName(): string
        {
            return self::csv_filetype;
        }


        /**
         * @return array
         */
        public final static function getAllowedFormats(): array
        {
            return
            [
                self::getCSVFiletypeName(),
                self::getJsonFiletypeName(),
                self::getXmlFiletypeName()
            ];
        }
    }
?>
