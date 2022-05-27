<?php
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class ZipCodeModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Tables
        protected $table = 'zip_codes';

            // Constants
        protected const area_name = 'area_name';
        protected const zip_number = 'zip_number';
        protected const country_id = 'country_id';


        //
        protected $fillable =
        [
            self::area_name,
            self::zip_number,
            self::country_id
        ];


        protected $hidden =
        [
            self::country_id
        ];


        protected $casts =
        [
            self::area_name  => 'string',
            self::zip_number => 'string',
            self::country_id => 'integer'
        ];
    }
?>