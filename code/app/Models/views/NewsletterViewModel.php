<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema()]
    class NewsletterViewModel
        extends ModelView
    {
        #[OA\Property()]
        public const table_name = 'newsletter_view';
        public $timestamps = false;
        protected $table = self::table_name;

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