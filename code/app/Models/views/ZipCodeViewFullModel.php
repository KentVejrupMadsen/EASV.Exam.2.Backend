<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;


    class ZipCodeViewFullModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table = 'zip_codes_view_full';

        protected $fillable =
        [
            'id',
            'area_name',
            'zip_number',
            'country_name',
            'country_acronym'
        ];

        protected $hidden =
        [
            'id',
        ];


        protected $casts =
        [
            'id' => 'integer',

            'area_name'  => 'string',

            'zip_number' => 'integer',

            'country_name'      => 'string',
            'country_acronym'   => 'string'
        ];
    }
?>