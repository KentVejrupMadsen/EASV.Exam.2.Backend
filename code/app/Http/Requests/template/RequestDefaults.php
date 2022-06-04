<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
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

        public final static function getJsonFiletypeName(): string
        {
            return self::json_filetype;
        }

        public final static function getXmlFiletypeName(): string
        {
            return self::xml_filetype;
        }

        public final static function getCSVFiletypeName(): string
        {
            return self::csv_filetype;
        }

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