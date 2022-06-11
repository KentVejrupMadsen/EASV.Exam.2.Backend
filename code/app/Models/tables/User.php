<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // External
    use App\Models\tables\templates\AccountModel;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Account Model',
                 description: '',
                 type: AccountModel::model_type,
                 deprecated: false )]
    class User 
        extends AccountModel
    {
        // Variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property( title:'account table name',
                       type: self::typeString,
                       readOnly: true, writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'accounts';

        #[OA\Property( title: 'username column',
                       type: self::typeString, readOnly: false, writeOnly: false,
                       deprecated: false )]
        protected const field_username = 'username';


        #[OA\Property( title: 'email column',
                       type: self::typeInteger, readOnly: false, writeOnly: false,
                       deprecated: false )]
        protected const field_email_id = 'account_email_identity';

        #[OA\Property( title: 'is email verified column',
                       type: self::typeDatetime, readOnly: false, writeOnly: false,
                       deprecated: false )]
        protected const field_verified_at = 'email_verified_at';


        #[OA\Property( title: 'password column',
                       type: self::typeString, readOnly: false, writeOnly: false,
                       deprecated: false )]
        protected const field_password = 'password';

        #[OA\Property( title: 'creation date column',
                       type: self::typeDatetime, readOnly: false, writeOnly: false,
                       deprecated: false )]
        protected const field_created_at = 'created_at';

        #[OA\Property( title: 'last updated at column',
                       type: self::typeDatetime, readOnly: false, writeOnly: false,
                       deprecated: false )]
        protected const field_updated_at = 'updated_at';

        #[OA\Property( title: 'settings column',
                       type: self::typeString, readOnly: false, writeOnly: false,
                       deprecated: false )]
        protected const field_settings = 'settings';

        #[OA\Property( title: 'remember token column',
                       type: self::typeString, readOnly: false, writeOnly: false,
                       deprecated: false )]
        protected const field_remember_token = 'remember_token';


        /**
         * @var string[]
         */
        protected $fillable = 
        [
            self::field_username,
            self::field_password,

            self::field_email_id,
            self::field_verified_at,

            self::field_created_at,
            self::field_updated_at,

            self::field_settings,
            self::field_remember_token
        ];


        /**
         * @var string[]
         */
        protected $hidden = 
        [
            self::identity,

            self::field_password,
            self::field_remember_token,
            self::field_email_id,
            self::field_verified_at
        ];


        /**
         * @var array
         */
        protected $casts = 
        [
            self::identity                => self::typeInteger,
            self::field_username          => self::typeString,

            self::field_email_id          => self::typeInteger,
            self::field_password          => self::typeString,

            self::field_verified_at       => self::typeDatetime,
            self::field_created_at        => self::typeDatetime,
            self::field_updated_at        => self::typeDatetime,

            self::field_settings          => self::typeArray
        ];
    }
?>