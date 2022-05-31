<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;


    /**
     *
     */
    class AccountViewModel
        extends ModelView
    {
        public $timestamps = false;
        protected $table = 'accounts_view';

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