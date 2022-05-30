<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class CSRFModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Const
        protected const field_assigned_to = 'assigned_to';

        protected const field_issued   = 'issued';
        protected const field_accessed = 'accessed';

        protected const field_activated   = 'activated';
        protected const field_invalidated = 'invalidated';

        protected const field_secret_token = 'secret_token';
        protected const field_secure_token = 'secure_token';

        protected const field_identity = 'id';

            // table
        protected $table = 'security_csrf_token';


        //
        protected $fillable = 
        [
            self::field_identity,
            self::field_assigned_to,
            self::field_issued,
            self::field_accessed,
            self::field_activated,
            self::field_invalidated,
            self::field_secure_token,
            self::field_secret_token
        ];

        
        protected $hidden = 
        [
            self::field_identity,
            self::field_secure_token,
            self::field_secret_token
        ];

        
        protected $casts =
        [
            self::field_identity      => 'integer',
            self::field_assigned_to   => 'string',
            self::field_secure_token  => 'string',
            self::field_secret_token  => 'string',
            self::field_issued        => 'datetime',
            self::field_accessed      => 'datetime',
            self::field_activated     => 'boolean',
            self::field_invalidated   => 'boolean'
        ];
    }
?>