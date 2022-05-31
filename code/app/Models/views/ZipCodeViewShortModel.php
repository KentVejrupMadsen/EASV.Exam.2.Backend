<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;


    final class ZipCodeViewShortModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table = 'zip_codes_view_short';


        protected $fillable =
        [
            'id',
            'area_name',
            'zip_number',
            'country_acronym'
        ];


        protected $hidden =
        [
            'id',
        ];


        protected $casts =
        [
            'id' => 'integer',

            'area_name'     => 'string',
            'zip_number'    => 'integer',

            'country_acronym' => 'string'
        ];
    }
?>