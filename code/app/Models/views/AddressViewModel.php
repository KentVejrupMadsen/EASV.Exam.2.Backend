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
    #[OA\Schema( title: 'Address View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class AddressViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'addresses_view';
        protected $table  = self::table_name;

        protected const field_id = 'id';
        protected const field_account_information_id = 'account_information_id';
        protected const field_road_name = 'road_name';
        protected const field_road_number = 'road_number';
        protected const field_levels = 'levels';
        protected const field_address_country = 'address_country';
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