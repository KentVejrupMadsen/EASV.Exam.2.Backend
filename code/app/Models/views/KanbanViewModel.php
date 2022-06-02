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


    #[OA\Schema()]
    class KanbanViewModel
        extends ModelView
    {
        public const table_name = 'kanbans_view';
        public $timestamps = false;
        protected $table = self::table_name;

        protected $fillable =
        [
            'id',
            'project_id',
            'kanban_title',
            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'id',
            'project_id'
        ];


        protected $casts =
        [
            'id'            => 'integer',

            'project_id'    => 'integer',
            'kanban_title'  => 'string',

            'created_at'    => 'timestamp',
            'updated_at'    => 'timestamp'
        ];
    }
?>
