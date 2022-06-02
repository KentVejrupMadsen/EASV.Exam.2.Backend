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
        #[OA\Property( type: 'string' )]
        public const table_name = 'kanbans_view';
        protected $table = self::table_name;

        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 5,
            minimum: 5,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            'id',
            'project_id',
            'kanban_title',
            'created_at',
            'updated_at'
        ];

        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 2,
            minimum: 2,
            items: new OA\Items(type: 'string'))]
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
