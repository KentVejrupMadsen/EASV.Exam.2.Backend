<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;

<<<<<<< HEAD
    
    class User 
        extends Authenticatable
    {
        protected $table = 'accounts';

        use HasApiTokens,  
            HasFactory, 
            Notifiable;


        protected $fillable = 
        [
=======
    class User 
    extends Authenticatable
    {
        use HasApiTokens, HasFactory, Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
            'name',
            'email',
            'password',
        ];

<<<<<<< HEAD
        
        protected $hidden = 
        [
=======
        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array<int, string>
         */
        protected $hidden = [
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
            'password',
            'remember_token',
        ];

<<<<<<< HEAD
        
        protected $casts = 
        [
=======
        /**
         * The attributes that should be cast.
         *
         * @var array<string, string>
         */
        protected $casts = [
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
            'email_verified_at' => 'datetime',
        ];
    }
?>