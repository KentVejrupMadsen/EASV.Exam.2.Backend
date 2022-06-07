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


        /**
         * @var string[]
         */
        protected $fillable =
        [
            'id',
            'kanban_id',
            'board_title',
            'body',
            'created_at',
            'updated_at'
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            'id',
            'kanban_id',
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            'id'        => self::typeInteger,
            'kanban_id' => self::typeInteger,

            'board_title'   => self::typeString,
            'body'          => self::typeArray,

            'created_at'    => self::typeTimestamp,
            'updated_at'    => self::typeTimestamp
        ];
    }
?>