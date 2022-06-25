<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionNoTimestampModel;


    // External libraries
    use Illuminate\Database\Eloquent\Relations\HasMany;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Country Model',
                 description: '',
                 type: BaseModel::model_type,
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class CountryModel
        extends ExtensionNoTimestampModel
    {
        // Variable
            // Constant
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
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
            self::identity,
            self::field_country_name,
            self::field_country_acronym
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity              => self::typeInteger,
            self::field_country_name    => self::typeString,
            self::field_country_acronym => self::typeString
        ];

        // relationships
        /**
         * @return HasMany
         */
        public final function zipCodes(): HasMany
        {
            return $this->hasMany( ZipCodeModel::class,
                                   'country_identity',
                                   'identity' );
        }
    }
?>
