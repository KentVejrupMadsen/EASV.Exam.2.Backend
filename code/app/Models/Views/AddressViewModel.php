<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\Views;

    use App\Models\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Address View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class AddressViewModel
        extends ModelView
    {
        #[OA\Property( title: '',
                       type: 'string',
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        public const table_name = 'addresses_view';
        protected $table  = self::table_name;


        #[OA\Property( title: 'identity',
                       type: 'unsigned integer',
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
        protected const field_account_information_id = 'account_information_id';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_road_name = 'road_name';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_road_number = 'road_number';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_levels = 'levels';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_address_country = 'address_country';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_zip_code_id = 'zip_code_id';



        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_account_information_id,
            self::field_road_name,
            self::field_road_number,
            self::field_levels,
            self::field_address_country,
            self::field_zip_code_id
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id,
            self::field_account_information_id,
            self::field_zip_code_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id                     => self::typeInteger,
            self::field_account_information_id => self::typeInteger,

            self::field_road_name       => self::typeString,
            self::field_road_number     => self::typeInteger,
            self::field_levels          => self::typeString,
            self::field_address_country => self::typeString,

            self::field_zip_code_id     => self::typeInteger
        ];
    }
?>