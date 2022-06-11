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
    use App\Models\tables\templates\ExtensionNoTimestampModel;
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
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class AddressModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // constants
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'addresses';

        #[OA\Property( title: 'account information column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_account_information_id = 'account_information_identity';

        #[OA\Property( title:'road name column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_road_name_id = 'road_name_identity';

        #[OA\Property( title:'road number column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_road_number = 'road_number';

        #[OA\Property( title:'apartment column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_levels = 'level_identity';

        #[OA\Property( title:'country column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_country_id = 'country_identity';

        #[OA\Property( title:'post code column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_zip_code_id = 'zip_code_identity';


            // Models
        protected $table = self::table_name;
        protected $primaryKey = self::identity;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::identity,
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
            self::identity,
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
            self::identity                      => self::typeInteger,
            self::field_account_information_id => self::typeInteger,
            self::field_road_name_id           => self::typeInteger,
            self::field_road_number            => self::typeInteger,
            self::field_levels                 => self::typeInteger,
            self::field_country_id             => self::typeInteger,
            self::field_zip_code_id            => self::typeInteger
        ];
    }
?>