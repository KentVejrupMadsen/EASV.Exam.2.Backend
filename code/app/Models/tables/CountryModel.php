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
    #[OA\Schema( title: 'Country Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class CountryModel
        extends ExtensionNoTimestampModel
    {
        // Variable
            // Constant
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       deprecated: false )]
        protected const table_name = 'countries';


        #[OA\Property( title:'country name column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_country_name    = 'country_name';

        #[OA\Property( title: 'country acronym column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_country_acronym = 'country_acronym';


            // Table
        protected $table      = self::table_name;
        protected $primaryKey = self::identity;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_country_name,
            self::field_country_acronym
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity => self::typeInteger,

            self::field_country_name    => self::typeString,
            self::field_country_acronym => self::typeString
        ];
    }
?>