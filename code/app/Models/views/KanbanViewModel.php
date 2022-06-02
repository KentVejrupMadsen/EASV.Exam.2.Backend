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
            schema: AccountViewModel::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
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
            schema: AccountViewModel::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
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
