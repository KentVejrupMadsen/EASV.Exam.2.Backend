<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\BaseModel;

    use OpenApi\Attributes
        as OA;

    /**
     *
     */
    #[OA\Schema()]
    class KanbanModel 
        extends BaseModel
    {
        // Variables
            // Table
        protected $table = 'kanbans';

            // Constant
        protected const field_kanban_title_id = 'kanban_title_id';
        protected const field_project_id      = 'project_id';


        //
        protected $fillable = 
        [
            self::field_kanban_title_id,
            self::field_project_id
        ];

        
        protected $hidden = 
        [
            self::field_kanban_title_id,
            self::field_project_id
        ];

        
        protected $casts = 
        [
            self::field_kanban_title_id   => 'integer',
            self::field_project_id        => 'integer'
        ];
    }
?>