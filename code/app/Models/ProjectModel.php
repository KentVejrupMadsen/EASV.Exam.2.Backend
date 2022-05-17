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
    class ProjectModel 
        extends Model
    {
        use HasFactory;
        
        protected $table = 'projects';
        
        protected $fillable = 
        [
            'account_owner_id',
            'project_title_id',
            'description',
            'tags'
        ];

        
        protected $hidden = 
        [
            
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>