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
        #[OA\Property( type: 'string' )]
        public const table_name = 'accounts_view';
        protected $table = self::table_name;

        protected const field_id = 'id';
        protected const field_username = 'username';

        protected const field_email = 'email';
        protected const field_email_verified_at = 'email_verified_at';

        protected const field_password = 'password';
        protected const field_remember_token = 'remember_token';

        protected const field_created_at = 'created_at';
        protected const field_updated_at = 'updated_at';

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