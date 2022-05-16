<?php
    /**
     * Author: Kent vejrup Madsen
     */
    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;

    
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
        ];

        
        protected $hidden = 
        [
            'password',
            'remember_token',
        ];

        
        protected $casts = 
        [
            'email_verified_at' => 'datetime',
        ];
    }
?>