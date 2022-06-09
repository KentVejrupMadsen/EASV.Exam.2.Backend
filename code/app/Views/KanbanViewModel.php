<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Views;

    use App\Models\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Kanban View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class KanbanViewModel
        extends ModelView
    {
        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        public const table_name = 'kanbans_view';
        protected $table = self::table_name;


        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_id = 'id';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_project_id = 'project_id';


        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_kanban_title = 'kanban_title';


        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_created_at = 'created_at';

        #[OA\Property( title: '',
                       type: 'string',
                       readonly: true,
                       writeOnly: false,
                       nullable: false,
                       deprecated: false )]
        protected const field_updated_at = 'updated_at';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_project_id,
            self::field_kanban_title,
            self::field_created_at,
            self::field_updated_at
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id,
            self::field_project_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id            => self::typeInteger,

            self::field_project_id    => self::typeInteger,
            self::field_kanban_title  => self::typeString,

            self::field_created_at    => self::typeTimestamp,
            self::field_updated_at    => self::typeTimestamp
        ];
    }
?>
