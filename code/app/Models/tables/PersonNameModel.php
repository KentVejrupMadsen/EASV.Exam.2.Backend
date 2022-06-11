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

    use OpenApi\Attributes
            as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Person Name Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class PersonNameModel
        extends ExtensionNoTimestampModel
    {
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       deprecated: false )]
        protected const table_name = 'person_name';
        protected $primaryKey = self::identity;


        // Variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property( title:'account information column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_account_information_id  = 'account_information_identity';

        #[OA\Property( title:'person first name column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_person_name_first_id    = 'person_name_first_identity';

        #[OA\Property( title:'person last name column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_person_name_lastname_id = 'person_name_lastname_identity';

        #[OA\Property( title:'person middle name column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_person_name_middlename  = 'person_name_middlename';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_account_information_id,
            self::field_person_name_first_id,
            self::field_person_name_lastname_id,
            self::field_person_name_middlename
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::identity,
            self::field_account_information_id,
            self::field_person_name_first_id,
            self::field_person_name_lastname_id,
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity => self::typeInteger,
            self::field_account_information_id  => self::typeInteger,
            self::field_person_name_first_id    => self::typeInteger,
            self::field_person_name_lastname_id => self::typeInteger,

            self::field_person_name_middlename  => self::typeArray,
        ];
    }
?>
