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
        #[OA\Property( type: 'string' )]
        public const table_name = 'newsletter_view';
        protected $table = self::table_name;

        #[OA\Property(
            property: 'fillable',
            schema: AccountViewModel::class,
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