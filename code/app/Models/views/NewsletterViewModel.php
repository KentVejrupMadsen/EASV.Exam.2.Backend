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


    #[OA\Schema( title: 'Newsletter View Model',
                 description: '',
                 type: ModelView::class )]
    class NewsletterViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'newsletter_view';
        protected $table = self::table_name;

        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            'id',
            'email',
            'options'
        ];

        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 1,
            minimum: 1,
            items: new OA\Items(type: 'string'))]
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