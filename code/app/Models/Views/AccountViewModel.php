<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\Views;

    use App\Models\Views\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Account View Model',
                 description: '',
                 type: ModelView::model_type,
                 readOnly: true,
                 writeOnly: false,
                 deprecated: false )]
    class AccountViewModel
        extends ModelView
    {
        #[OA\Property( title: 'view name',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        public const table_name = 'accounts_view';
        protected $table = self::table_name;


        #[OA\Property( title: 'identity column',
                       type: self::typeInteger,
                       nullable: false,
                       deprecated: false )]
        protected const field_id = 'id';

        #[OA\Property( title: 'username column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_username = 'username';


        #[OA\Property( title: 'email column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_email = 'email';

        #[OA\Property( title: 'account verified at column',
                       type: self::typeTimestamp,
                       nullable: true,
                       deprecated: false )]
        protected const field_email_verified_at = 'email_verified_at';


        #[OA\Property( title: 'password column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_password = 'password';

        #[OA\Property( title: 'remember token column',
                       type: self::typeString,
                       nullable: true,
                       deprecated: false )]
        protected const field_remember_token = 'remember_token';


        #[OA\Property( title: 'creation date column',
                       type: self::typeTimestamp,
                       nullable: false,
                       deprecated: false )]
        protected const field_created_at = 'created_at';


        #[OA\Property( title: 'last updated at column',
                       type: self::typeTimestamp,
                       nullable: false,
                       deprecated: false )]
        protected const field_updated_at = 'updated_at';

        #[OA\Property( title: 'settings column',
                       type: self::typeString,
                       nullable: false,
                       deprecated: false )]
        protected const field_settings = 'settings';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_username,
            self::field_email,
            self::field_email_verified_at,
            self::field_password,
            self::field_remember_token,
            self::field_created_at,
            self::field_updated_at,
            self::field_settings
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id,
            self::field_email_verified_at,
            self::field_password,
            self::field_remember_token,
            self::field_settings
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id        => self::typeInteger,
            self::field_username  => self::typeString,

            self::field_email             => self::typeString,
            self::field_email_verified_at => self::typeTimestamp,

            self::field_password       => self::typeString,
            self::field_remember_token => self::typeString,
            self::field_created_at     => self::typeTimestamp,
            self::field_updated_at     => self::typeTimestamp,
            self::field_settings       => self::typeArray
        ];
    }
?>