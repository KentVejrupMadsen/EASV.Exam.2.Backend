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
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class CSRFModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Const
        #[OA\Property( title: 'table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'security_csrf_token';

        #[OA\Property( title:'identity column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_identity = self::identity;


        #[OA\Property( title:'assigned to column',
                       type: 'IPv4|IPv6 address',
                       deprecated: false )]
        protected const field_assigned_to = 'assigned_to';

        #[OA\Property( title:'issued column',
                       type: self::typeTimestamp,
                       deprecated: false )]
        protected const field_issued   = 'issued';

        #[OA\Property( title:'accessed column',
                       type: self::typeTimestamp,
                       deprecated: false )]
        protected const field_accessed = 'accessed';

        #[OA\Property( title: 'is activated column',
                       type: self::typeBoolean,
                       deprecated: false )]
        protected const field_activated   = 'activated';

        #[OA\Property( title:'is invalidated column',
                       type: self::typeBoolean,
                       deprecated: false )]
        protected const field_invalidated = 'invalidated';


        #[OA\Property( title:'secret token column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_secret_token = 'secret_token';

        #[OA\Property( title:'secure token column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_secure_token = 'secure_token';

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
