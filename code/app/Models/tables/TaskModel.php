<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
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
        // variables
            // Table
        protected $table = 'tasks';

            // Constants
        protected const field_board_id = 'board_id';
        protected const field_content = 'content';


        //
        protected $fillable = 
        [
            self::field_board_id,
            self::field_content
        ];

        
        protected $hidden = 
        [
            self::field_board_id,
        ];

        
        protected $casts = 
        [
            self::field_board_id => 'integer',
            self::field_content  => 'string'
        ];
    }
?>