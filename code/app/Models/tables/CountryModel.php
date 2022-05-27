<?php
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class CountryModel
        extends ExtensionNoTimestampModel
    {
        // Variable
            // Table
        protected $table = 'countries';

            // Constant
        protected const field_country_name    = 'country_name';
        protected const field_country_acronym = 'country_acronym';

        //
        protected $fillable =
        [
            self::field_country_name,
            self::field_country_acronym
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            self::field_country_name    => 'string',
            self::field_country_acronym => 'string'
        ];
    }
?>