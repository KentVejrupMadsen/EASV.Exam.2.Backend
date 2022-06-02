<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    use App\Models\templates\ExtensionNoTimestampModel;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
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


        //
        #[OA\Property(
            property: 'fillable',
            schema: AccountState::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            self::field_account_id,
            self::field_deactivated,
            self::field_writeable_disabled,
            self::field_locked,
            self::field_archived
        ];


        #[OA\Property(
            property: 'hidden',
            schema: AccountState::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            self::field_account_id
        ];


        protected $casts =
        [
            self::field_account_id          => 'integer',
            self::field_deactivated         => 'boolean',
            self::field_writeable_disabled  => 'boolean',
            self::field_locked              => 'boolean',
            self::field_archived            => 'boolean'
        ];
    }
?>
