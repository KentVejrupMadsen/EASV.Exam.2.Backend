<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    class ProjectTitleModel 
        extends ExtensionLabelModel
    {
        use HasFactory;
        
        protected $table = 'project_titles';


        protected $hidden = 
        [
            
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>