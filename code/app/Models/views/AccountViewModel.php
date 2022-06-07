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


    #[OA\Schema( title: 'Account View Model',
                 description: '',
                 type: ModelView::class,
                 deprecated: false )]
    class AccountViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'accounts_view';
        protected $table = self::table_name;

        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 9,
            minimum: 9,
            items: new OA\Items(type: 'string'))]
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


        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 5,
            minimum: 5,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            'id',
            'email_verified_at',
            'password',
            'remember_token',
            'settings'
        ];

        protected $casts =
        [
            'id'        => 'integer',
            'username'  => 'string',

            'email'     => 'string',
            'email_verified_at' =>'timestamp',

            'password'       => 'string',
            'remember_token' => 'string',
            'created_at'     => 'timestamp',
            'updated_at'     => 'timestamp',
            'settings'       => 'array'
        ];
    }
?>