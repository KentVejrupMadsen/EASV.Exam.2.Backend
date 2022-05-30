<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class AccountState
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Table
        protected $table = 'account_states';

            // Constants
        protected const field_account_id            = 'account_id';
        protected const field_deactivated           = 'deactivated';
        protected const field_writeable_disabled    = 'writeable_disabled';
        protected const field_locked                = 'locked';
        protected const field_archived              = 'archived';


        //
        protected $fillable =
        [
            self::field_account_id,
            self::field_deactivated,
            self::field_writeable_disabled,
            self::field_locked,
            self::field_archived
        ];


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
