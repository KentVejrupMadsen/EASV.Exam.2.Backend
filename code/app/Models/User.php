<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Notifications\Notifiable;

    use Laravel\Sanctum\HasApiTokens;

    use Illuminate\Foundation\Auth\User
        as Authenticatable;

    
    class User 
        extends Authenticatable
    {
        protected $table = 'accounts';

        use HasApiTokens,  
            HasFactory, 
            Notifiable;


        protected $fillable = 
        [
            'username',
            'name',
            'email_id',
            'password',
            'created_at',
            'updated_at',
            'settings'
        ];

        
        protected $hidden = 
        [
            'password',
            'remember_token',
            'email_id',
            'email_verified_at'
        ];

        
        protected $casts = 
        [
            'username'          => 'string',
            'name'              => 'string',
            'email_id'          => 'integer',
            'password'          => 'string',
            'email_verified_at' => 'datetime',
            'created_at'        => 'datetime',
            'updated_at'        => 'datetime',
            'settings'          => 'array'
        ];
    }
?>