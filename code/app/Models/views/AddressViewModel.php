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


        /**
         * @var string[]
         */
        protected $fillable =
        [
            'id',
            'account_information_id',
            'road_name',
            'road_number',
            'levels',
            'address_country',
            'zip_code_id'
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            'id',
            'account_information_id',
            'zip_code_id'
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            'id'                     => self::typeInteger,
            'account_information_id' => self::typeInteger,

            'road_name'       => self::typeString,
            'road_number'     => self::typeInteger,
            'levels'          => self::typeString,
            'address_country' => self::typeString,

            'zip_code_id' => self::typeInteger
        ];
    }
?>