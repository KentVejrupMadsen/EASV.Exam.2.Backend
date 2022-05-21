<?php
    namespace App\Models;


    /**
     *
     */
    class CountryModel
        extends ExtensionNoTimestampModel
    {
        protected $table = 'countries';

        protected $fillable =
        [
            'country_name',
            'country_acronym'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>