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
    class BoardViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'boards_view';
        protected $table = self::table_name;

        #[OA\Property(
            property: 'fillable',
            schema: BoardViewModel::class,
            type: 'array',
            maximum: 6,
            minimum: 6,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            'id',
            'kanban_id',
            'board_title',
            'body',
            'created_at',
            'updated_at'
        ];

        #[OA\Property(
            property: 'hidden',
            schema: BoardViewModel::class,
            type: 'array',
            maximum: 2,
            minimum: 2,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            'id',
            'kanban_id',
        ];


        protected $casts =
        [
            'id'        => 'integer',
            'kanban_id' => 'integer',

            'board_title'   => 'string',
            'body'          => 'array',

            'created_at'    => 'timestamp',
            'updated_at'    => 'timestamp'
        ];
    }
?>