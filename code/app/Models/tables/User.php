<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // External
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    use Illuminate\Foundation\Auth\User
        as Authenticatable;

    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;

    use OpenApi\Attributes
        as OA;

    // Internal
    use App\Models\templates\BaseModel;


    /**
     *
     */
    #[OA\Schema( title: 'Account Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class User 
        extends Authenticatable
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
        public const field_name = 'name';

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

        //
        use HasApiTokens,
            HasFactory,
            Notifiable;


        /**
         * @var string[]
         */
        protected $fillable = 
        [
            self::field_username,
            self::field_name,
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
            self::field_username          => BaseModel::typeString,
            self::field_name              => BaseModel::typeString,

            self::field_email_id          => BaseModel::typeInteger,
            self::field_password          => BaseModel::typeString,

            self::field_verified_at       => BaseModel::typeDatetime,
            self::field_created_at        => BaseModel::typeDatetime,
            self::field_updated_at        => BaseModel::typeDatetime,

            self::field_settings          => BaseModel::typeArray
        ];
    }
?>