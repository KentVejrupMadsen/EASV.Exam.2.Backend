<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    // Internal libraries
    use App\Models\templates\BaseModel;
    use App\Models\templates\ExtensionNoTimestampModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Cross-Site Request Forgery Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false)]
    class CSRFModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Const
        #[OA\Property( type: 'string' )]
        public const table_name = 'security_csrf_token';

        #[OA\Property( type: 'string' )]
        public const field_assigned_to = 'assigned_to';

        #[OA\Property( type: 'string' )]
        public const field_issued   = 'issued';

        #[OA\Property( type: 'string' )]
        public const field_accessed = 'accessed';

        #[OA\Property( type: 'string' )]
        public const field_activated   = 'activated';

        #[OA\Property( type: 'string' )]
        public const field_invalidated = 'invalidated';


        #[OA\Property( type: 'string' )]
        public const field_secret_token = 'secret_token';

        #[OA\Property( type: 'string' )]
        public const field_secure_token = 'secure_token';

        #[OA\Property( type: 'string' )]
        public const field_identity = 'id';

            // table
        protected $table = self::table_name;


        //
        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 8,
            minimum: 8,
            items: new OA\Items( type: 'string' ))]
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

        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items( type: 'string' ))]
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