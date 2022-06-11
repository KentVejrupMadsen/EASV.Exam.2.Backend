<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
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
    #[OA\Schema( title: 'Cross-Site Request Forgery Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false)]
    class CSRFModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Const
        #[OA\Property( title:'table name', type: 'string' )]
        protected const table_name = 'security_csrf_token';

        #[OA\Property( type: 'string' )]
        protected const field_assigned_to = 'assigned_to';

        #[OA\Property( type: 'string' )]
        protected const field_issued   = 'issued';

        #[OA\Property( type: 'string' )]
        protected const field_accessed = 'accessed';

        #[OA\Property( type: 'string' )]
        protected const field_activated   = 'activated';

        #[OA\Property( type: 'string' )]
        protected const field_invalidated = 'invalidated';


        #[OA\Property( type: 'string' )]
        protected const field_secret_token = 'secret_token';

        #[OA\Property( type: 'string' )]
        protected const field_secure_token = 'secure_token';

        #[OA\Property( type: 'string' )]
        protected const field_identity = self::identity;

            // table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;


        /**
         * @var string[]
         */
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


        /**
         * @var string[]
         */
        protected $hidden = 
        [
            self::field_identity,
            self::field_secure_token,
            self::field_secret_token
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_identity      => self::typeInteger,
            self::field_assigned_to   => self::typeString,
            self::field_secure_token  => self::typeString,
            self::field_secret_token  => self::typeString,
            self::field_issued        => self::typeDatetime,
            self::field_accessed      => self::typeDatetime,
            self::field_activated     => self::typeBoolean,
            self::field_invalidated   => self::typeBoolean
        ];
    }
?>