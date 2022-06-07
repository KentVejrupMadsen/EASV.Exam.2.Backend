<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

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
        #[OA\Property( type: 'string' )]
        public const table_name = 'kanbans_view';
        protected $table = self::table_name;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            'id',
            'project_id',
            'kanban_title',
            'created_at',
            'updated_at'
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            'id',
            'project_id'
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            'id'            => self::typeInteger,

            'project_id'    => self::typeInteger,
            'kanban_title'  => self::typeString,

            'created_at'    => self::typeTimestamp,
            'updated_at'    => self::typeTimestamp
        ];
    }
?>
