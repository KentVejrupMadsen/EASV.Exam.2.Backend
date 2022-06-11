<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Kanban Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
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

        #[OA\Property( type: 'string' )]
        public const field_created_at      = 'created_at';

        #[OA\Property( type: 'string' )]
        public const field_updated_at      = 'updated_at';


        /**
         * @var string[]
         */
        protected $fillable = 
        [
            self::field_kanban_title_id,
            self::field_project_id
        ];


        /**
         * @var string[]
         */
        protected $hidden = 
        [
            self::field_kanban_title_id,
            self::field_project_id
        ];


        /**
         * @var string[]
         */
        protected $casts = 
        [
            self::field_kanban_title_id   => self::typeInteger,
            self::field_project_id        => self::typeInteger
        ];
    }
?>