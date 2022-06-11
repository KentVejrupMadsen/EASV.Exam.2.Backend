<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Address Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class AddressModel
        extends BaseModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'addresses';

        #[OA\Property( type: 'boolean' )]
        public $timestamps = false;

        protected $table = self::table_name;

        #[OA\Property( type: 'string' )]
        public const field_account_information_id = 'account_information_id';

        #[OA\Property( type: 'string' )]
        public const field_road_name_id = 'road_name_id';

        #[OA\Property( type: 'string' )]
        public const field_road_number = 'road_number';

        #[OA\Property( type: 'string' )]
        public const field_levels = 'levels';

        #[OA\Property( type: 'string' )]
        public const field_country_id = 'country_id';

        #[OA\Property( type: 'string' )]
        public const field_zip_code_id = 'zip_code_id';

        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_account_information_id,
            self::field_road_name_id,
            self::field_road_number,
            self::field_levels,
            self::field_country_id,
            self::field_zip_code_id
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_account_information_id,
            self::field_road_name_id,
            self::field_country_id,
            self::field_zip_code_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_account_information_id => self::typeInteger,
            self::field_road_name_id           => self::typeInteger,
            self::field_road_number            => self::typeInteger,
            self::field_levels                 => self::typeString,
            self::field_country_id             => self::typeInteger,
            self::field_zip_code_id            => self::typeInteger
        ];
    }
?>