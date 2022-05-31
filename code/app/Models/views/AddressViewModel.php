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
        protected $table = 'addresses_view';

        protected $fillable =
            [
                '',
                '',
                ''
            ];

        protected $hidden =
            [
                '',
            ];


        protected $casts =
            [
                ''    => 'integer',
                ''  => 'datetime',
                ''  => 'datetime',
            ];

    }
?>