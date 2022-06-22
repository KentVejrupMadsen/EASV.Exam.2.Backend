<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Models\security;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionNoTimestampModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Configuration Model',
                 description: '',
                 type: BaseModel::model_type,
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class ConfigurationModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Constants
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'security_configuration';

        #[OA\Property( title: 'key column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_key   = 'key';

        #[OA\Property( title: 'value column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_value = 'value';


            // Table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::identity,

            self::field_key,
            self::field_value
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::identity,
            self::field_value
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity => self::typeInteger,

            self::field_key   => self::typeString,
            self::field_value => self::typeArray
        ];
    }
?>
