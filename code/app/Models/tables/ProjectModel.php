<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

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
            'account_owner_id'  => 'integer',
            'project_title_id'  => 'integer',
            'description'       => 'string',
            'tags'              => 'string'
        ];
    }
?>