<?php
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;


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
            'country_name' => 'string',
            'country_acronym' => 'string'
        ];
    }
?>