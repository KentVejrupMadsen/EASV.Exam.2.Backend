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
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    use Illuminate\Foundation\Auth\User
        as Authenticatable;

    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;

    use OpenApi\Attributes
        as OA;

    // Internal
    use App\Models\tables\templates\BaseModel;


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
        #[OA\Property( type: 'string' )]
        public const table_name = 'accounts';

        // Variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property( type: 'string' )]
        public const field_username = 'username';

        #[OA\Property( type: 'string' )]
        public const field_email_id = 'email_id';

        #[OA\Property( type: 'string' )]
        public const field_password = 'password';

        #[OA\Property( type: 'string' )]
        public const field_created_at = 'created_at';

        #[OA\Property( type: 'string' )]
        public const field_updated_at = 'updated_at';

        #[OA\Property( type: 'string' )]
        public const field_settings = 'settings';

        #[OA\Property( type: 'string' )]
        public const field_remember_token = 'remember_token';

        #[OA\Property( type: 'string' )]
        public const field_verified_at = 'email_verified_at';


        /**
         * @var string[]
         */
        protected $fillable = 
        [
            self::field_username,
            self::field_email_id,
            self::field_password,
            self::field_created_at,
            self::field_updated_at,
            self::field_settings,
            self::field_remember_token,
            self::field_verified_at
        ];


        /**
         * @var string[]
         */
        protected $hidden = 
        [
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

            self::field_username          => AccountModel::typeString,

            self::field_email_id          => AccountModel::typeInteger,
            self::field_password          => AccountModel::typeString,

            self::field_verified_at       => AccountModel::typeDatetime,
            self::field_created_at        => AccountModel::typeDatetime,
            self::field_updated_at        => AccountModel::typeDatetime,

            self::field_settings          => AccountModel::typeArray
        ];
    }
?>