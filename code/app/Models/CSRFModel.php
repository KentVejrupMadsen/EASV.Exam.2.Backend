<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    use Illuminate\Support\Str;


    /**
     *
     */
    class CSRFModel
        extends Model
    {
        use HasFactory;
        
        protected $table = 'security_csrf_token';
        public $timestamps = false;


        protected $fillable = 
        [
            'assigned_to',
            'secure_token',
            'issued',
            'accessed',
            'activated',
            'invalidated',
            'secret_token'
        ];

        
        protected $hidden = 
        [
            'secure_token',
            'secret_token'
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>