<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;


    class PersonNameViewModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table = 'person_names_view';


        protected $fillable =
        [
            'id',
            'account_information_id',
            'person_first_name',
            'person_name_middlename',
            'person_last_name'
        ];

        protected $hidden =
        [
            'id',
            'account_information_id'
        ];


        protected $casts =
        [
            'id' => 'integer',
            'account_information_id' => 'integer',

            'person_first_name'      => 'string',
            'person_name_middlename' => 'array',
            'person_last_name'       => 'string'
        ];
    }
?>
