<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\Views;

    use App\Models\Views\templates\ModelView;
    use OpenApi\Attributes as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Newsletter View Model',
                 description: '',
                 type: ModelView::model_type,
                 readOnly: true,
                 writeOnly:false,
                 deprecated: false )]
    class NewsletterViewModel
        extends ModelView
    {
        #[OA\Property( title: 'view name',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        public const table_name = 'newsletter_view';
        protected $table = self::table_name;


        #[OA\Property( title: 'identities column',
                       type: self::typeInteger,
                       nullable: false,
                       deprecated: false )]
        protected const field_id = 'identity';

        #[OA\Property( title: 'email column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_email = 'email';

        #[OA\Property( title: 'option column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
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