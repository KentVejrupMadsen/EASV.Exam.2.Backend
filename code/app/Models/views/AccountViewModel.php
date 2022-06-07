<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

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


        /**
         * @var string[]
         */
        protected $fillable =
        [
            'id',
            'username',
            'email',
            'email_verified_at',
            'password',
            'remember_token',
            'created_at',
            'updated_at',
            'settings'
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            'id',
            'email_verified_at',
            'password',
            'remember_token',
            'settings'
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            'id'        => self::typeInteger,
            'username'  => self::typeString,

            'email'     => self::typeString,
            'email_verified_at' => self::typeTimestamp,

            'password'       => self::typeString,
            'remember_token' => self::typeString,
            'created_at'     => self::typeTimestamp,
            'updated_at'     => self::typeTimestamp,
            'settings'       => self::typeArray
        ];
    }
?>