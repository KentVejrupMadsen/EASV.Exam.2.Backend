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
    use App\Models\tables\templates\ExtensionNoTimestampModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Zip Code Model',
                 description: '',
                 type: BaseModel::model_type,
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class ZipCodeModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Tables
        protected $table = self::table_name;
        protected $primaryKey = self::identity;

            // Constants
        #[OA\Property( title: 'table name',
                       type: self::typeDatabaseModel,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'zip_codes';

        #[OA\Property( title: 'area name column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_area_name = 'area_name';

        #[OA\Property( title: 'post code number column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_zip_number = 'zip_number';

        #[OA\Property( title: 'country column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_country_id = 'country_identity';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_area_name,
            self::field_zip_number,
            self::field_country_id
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::identity,
            self::field_country_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity => self::typeInteger,
            self::field_area_name  => self::typeString,
            self::field_zip_number => self::typeInteger,
            self::field_country_id => self::typeInteger
        ];
    }
?>