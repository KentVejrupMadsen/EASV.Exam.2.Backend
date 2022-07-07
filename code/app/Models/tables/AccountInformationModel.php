<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Models\tables;

    // Internal Libraries
    use App\Models\tables\templates\BaseModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Account Information Model',
                 description: '',
                 type: BaseModel::model_type,
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class AccountInformationModel
        extends BaseModel
    {
        // Constants
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'account_information_options';

        #[OA\Property( title: 'account column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_account = 'account_identity';

        #[OA\Property( title: 'creation date column',
                       type: self::typeDatetime,
                       deprecated: false )]
        protected const field_created_at = 'created_at';

        #[OA\Property( title:'last updated column',
                       type: self::typeDatetime,
                       deprecated: false )]
        protected const field_updated_at = 'updated_at';


        #[OA\Property( title:'account settings column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_settings = 'settings';


        // Variables
            // Model
        protected $table = self::table_name;
        protected $primaryKey = self::identity;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::identity,
            self::field_account,
            self::field_created_at,
            self::field_updated_at
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::identity,
            self::field_account,
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity          => self::typeInteger,
            self::field_account     => self::typeInteger,

            self::field_created_at  => self::typeDatetime,
            self::field_updated_at  => self::typeDatetime,
        ];
    }
?>
