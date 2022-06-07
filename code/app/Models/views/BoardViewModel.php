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


    #[OA\Schema( title: 'Board View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class BoardViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'boards_view';
        protected $table = self::table_name;


        protected $fillable =
        [
            'id',
            'kanban_id',
            'board_title',
            'body',
            'created_at',
            'updated_at'
        ];


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