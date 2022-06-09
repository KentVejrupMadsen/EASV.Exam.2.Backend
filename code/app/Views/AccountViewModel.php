<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Views;

    use App\Models\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Account View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class AccountViewModel
        extends ModelView
    {
        #[OA\Property( title: 'accounts view',
                       type: 'table name',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        public const table_name = 'accounts_view';
        protected $table = self::table_name;


        #[OA\Property( title: 'identity',
                       type: 'unsigned integer',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_id = 'id';

        #[OA\Property( title: 'field column username',
                       type: 'string', readonly: true, writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_username = 'username';


        #[OA\Property( type: 'string', readonly: true, writeOnly: false )]
        protected const field_email = 'email';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false )]
        protected const field_email_verified_at = 'email_verified_at';


        #[OA\Property( type: 'string', readonly: true, writeOnly: false )]
        protected const field_password = 'password';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false )]
        protected const field_remember_token = 'remember_token';


        #[OA\Property( type: 'string', readonly: true, writeOnly: false )]
        protected const field_created_at = 'created_at';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false )]
        protected const field_updated_at = 'updated_at';

        #[OA\Property( type: 'array', readonly: true, writeOnly: false )]
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