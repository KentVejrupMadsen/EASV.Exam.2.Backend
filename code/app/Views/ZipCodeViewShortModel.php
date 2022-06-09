<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Views;

    use App\Models\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Zip Code View short model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class ZipCodeViewShortModel
        extends ModelView
    {
        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        public const table_name = 'zip_codes_view_short';
        protected $table = self::table_name;


        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_id = 'id';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_area_name = 'area_name';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_post_code = 'zip_number';


        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_country_acronym = 'country_acronym';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_area_name,
            self::field_post_code,
            self::field_country_acronym
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
            self::field_id => self::typeInteger,

            self::field_area_name     => self::typeString,
            self::field_post_code    => self::typeInteger,

            self::field_country_acronym => self::typeString
        ];
    }
?>