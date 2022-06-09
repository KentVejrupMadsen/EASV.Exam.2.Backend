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
    #[OA\Schema( title: 'Board View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class BoardViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        public const table_name = 'boards_view';
        protected $table = self::table_name;


        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_id = 'id';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_kanban_id = 'kanban_id';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_board_title = 'board_title';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_body = 'body';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_created_at = 'created_at';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_updated_at = 'updated_at';

        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_kanban_id,
            self::field_board_title,
            self::field_body,
            self::field_created_at,
            self::field_updated_at
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id,
            self::field_kanban_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id        => self::typeInteger,
            self::field_kanban_id => self::typeInteger,

            self::field_board_title   => self::typeString,
            self::field_body          => self::typeArray,

            self::field_created_at    => self::typeTimestamp,
            self::field_updated_at    => self::typeTimestamp
        ];
    }
?>