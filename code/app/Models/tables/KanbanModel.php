<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\templates\BaseModel;

    // External libraries
    use OpenApi\Attributes
        as OA;

    /**
     *
     */
    #[OA\Schema()]
    class KanbanModel 
        extends BaseModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'kanbans';

        // Variables
            // Table
        protected $table = self::table_name;

            // Constant
        #[OA\Property( type: 'string' )]
        public const field_kanban_title_id = 'kanban_title_id';

        #[OA\Property( type: 'string' )]
        public const field_project_id      = 'project_id';


        //
        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $fillable = 
        [
            self::field_kanban_title_id,
            self::field_project_id
        ];

        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
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