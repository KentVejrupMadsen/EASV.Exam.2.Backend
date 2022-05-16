<?php
    /**
     * Author: Kent vejrup Madsen
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class CSRFModel
        extends Model
    {
        use HasFactory;
        
        protected $table = 'CRSFToken';
        public $timestamps = false;


        protected $fillable = 
        [
            'assigned_to',
            'secure_token',
            'issued',
            'accessed'
        ];

        
        protected $hidden = 
        [
            
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>