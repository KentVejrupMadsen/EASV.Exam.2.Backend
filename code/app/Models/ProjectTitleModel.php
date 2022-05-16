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
    class ProjectTitleModel 
        extends Model
    {
        use HasFactory;
        
        protected $table = 'project_titles';

        protected $fillable = 
        [
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