<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionNoTimestampModel;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Account States Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class AccountState
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Constants
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'account_states';

        #[OA\Property( title:'account column',
                       type: self::typeInteger,
                       readOnly: false,
                       writeOnly: false,
                       deprecated: false )]
        protected const field_account_id = 'account_identity';

        #[OA\Property( title: 'deactivated column',
                       type: self::typeBoolean,
                       readOnly: false,
                       writeOnly: false,
                       deprecated: false )]
        protected const field_deactivated = 'deactivated';

        #[OA\Property( title: 'writeable disabled column',
                       type: self::typeBoolean,
                       readOnly: false,
                       writeOnly: false,
                       deprecated: false )]
        protected const field_writeable_disabled = 'writeable_disabled';

        #[OA\Property( title: 'locked column',
                       type: self::typeBoolean,
                       readOnly: false,
                       writeOnly: false,
                       deprecated: false )]
        protected const field_locked = 'locked';

        #[OA\Property( title: 'archived column',
                       type: self::typeBoolean,
                       readOnly: false,
                       writeOnly: false,
                       deprecated: false )]
        protected const field_archived = 'archived';


            // Table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_account_id,
            self::field_deactivated,
            self::field_writeable_disabled,
            self::field_locked,
            self::field_archived
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_account_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::identity => self::typeInteger,
            self::field_account_id          => self::typeInteger,
            
            self::field_deactivated         => self::typeBoolean,
            self::field_writeable_disabled  => self::typeBoolean,
            self::field_locked              => self::typeBoolean,
            self::field_archived            => self::typeBoolean
        ];
    }
?>
