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
    class TaskModel
        extends ExtensionNoTimestampModel
    {
        protected $table = 'tasks';
        
        protected $fillable = 
        [
            'board_id',
            'content'
        ];

        
        protected $hidden = 
        [
            'board_id',
        ];

        
        protected $casts = 
        [
            'board_id' => 'integer',
            'content' => 'string'
        ];
    }
?>