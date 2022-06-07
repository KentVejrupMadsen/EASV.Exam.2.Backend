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


    /**
     *
     */
    #[OA\Schema( title: 'Newsletter View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class NewsletterViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'newsletter_view';
        protected $table = self::table_name;

        protected const field_id = 'id';
        protected const field_email = 'email';
        protected const field_options = 'options';

        
        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_email,
            self::field_options
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id        => self::typeInteger,
            self::field_email     => self::typeString,
            self::field_options   => self::typeArray
        ];
    }
?>