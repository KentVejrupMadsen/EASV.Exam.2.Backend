<?php
    /**
     * Author: Kent vejrup Madsen
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class TaskModel 
        extends Model
    {
        use HasFactory;
        
        protected $table = 'tasks';
        
        protected $fillable = 
        [
            'board_id',
            'content'
        ];

        
        protected $hidden = 
        [
            
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>