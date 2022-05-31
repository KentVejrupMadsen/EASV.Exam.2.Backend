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
    class NewsletterViewModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table = 'newsletter_view';

        protected $fillable =
        [
            'id',
            'email',
            'options'
        ];

        protected $hidden =
        [
            'id',
        ];


        protected $casts =
        [
            'id'        => 'integer',
            'email'     => 'string',
            'options'   => 'array'
        ];
    }
?>