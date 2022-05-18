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
    class ProjectMemberModel 
        extends Model
    {
        use HasFactory;
        
        protected $table = 'project_members';
        
        protected $fillable = 
        [
            'project_id',
            'account_id',
            'member_group_id'    
        ];

        
        protected $hidden = 
        [
            
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>