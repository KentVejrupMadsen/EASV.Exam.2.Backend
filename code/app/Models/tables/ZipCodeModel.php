<?php
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class ZipCodeModel
        extends ExtensionNoTimestampModel
    {
        protected $table = 'zip_codes';

        protected $fillable =
        [
            'area_name',
            'zip_number',
            'country_id'
        ];


        protected $hidden =
        [
            'country_id'
        ];


        protected $casts =
        [
            'area_name' => 'string',
            'zip_number' => 'string',
            'country_id' => 'integer'
        ];
    }
?>