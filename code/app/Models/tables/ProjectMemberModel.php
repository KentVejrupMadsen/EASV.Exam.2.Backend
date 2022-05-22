<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class ProjectMemberModel 
        extends ExtensionNoTimestampModel
    {
        protected $table = 'project_members';
        
        protected $fillable = 
        [
            'project_id',
            'account_id',
            'member_group_id'    
        ];

        
        protected $hidden = 
        [
            'project_id',
            'account_id',
            'member_group_id'
        ];

        
        protected $casts = 
        [

            'project_id'        => 'integer',
            'account_id'        => 'integer',
            'member_group_id'   => 'integer'

        ];
    }
?>