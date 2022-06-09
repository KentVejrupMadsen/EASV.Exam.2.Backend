<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    use App\Models\templates\BaseModel;
    use App\Models\templates\ExtensionNoTimestampModel;

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
        #[OA\Property( type: 'string' )]
        public const table_name = 'account_states';

        // Variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property( type: 'string' )]
        public const field_account_id            = 'account_id';

        #[OA\Property( type: 'string' )]
        public const field_deactivated           = 'deactivated';

        #[OA\Property( type: 'string' )]
        public const field_writeable_disabled    = 'writeable_disabled';

        #[OA\Property( type: 'string' )]
        public const field_locked                = 'locked';

        #[OA\Property( type: 'string' )]
        public const field_archived              = 'archived';


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
            self::field_account_id          => self::typeInteger,
            self::field_deactivated         => self::typeBoolean,
            self::field_writeable_disabled  => self::typeBoolean,
            self::field_locked              => self::typeBoolean,
            self::field_archived            => self::typeBoolean
        ];
    }
?>
