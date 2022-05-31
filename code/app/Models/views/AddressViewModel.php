<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;


    /**
     *
     */
    class AddressViewModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table   = 'addresses_view';

        protected $fillable =
        [
            'id',
            'account_information_id',
            'road_name',
            'road_number',
            'levels',
            'address_country',
            'zip_code_id'
        ];


        protected $hidden =
        [
            'id',
            'account_information_id',
            'zip_code_id'
        ];


        protected $casts =
        [
            'id'                     => 'integer',
            'account_information_id' => 'integer',

            'road_name'       => 'string',
            'road_number'     => 'integer',
            'levels'          => 'string',
            'address_country' => 'string',

            'zip_code_id' => 'integer'
        ];
    }
?>