<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal
    use App\Models\templates\BaseModel;

    // External
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Board Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class BoardModel
        extends BaseModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'boards';
        protected $table = self::table_name;

        public const field_kanban_id = 'kanban_id';
        public const field_board_title_id = 'board_title_id';
        public const field_body = 'body';
        public const field_created_at = 'created_at';
        public const field_updated_at = 'updated_at';

        /**
         * @var string[]
         */
        protected $fillable = 
        [
            self::field_kanban_id,
            self::field_board_title_id,
            self::field_body,
            self::field_created_at,
            self::field_updated_at
        ];


        /**
         * @var string[]
         */
        protected $hidden = 
        [
            self::field_kanban_id,
            self::field_board_title_id,
        ];


        /**
         * @var string[]
         */
        protected $casts = 
        [
            self::field_kanban_id       => self::typeInteger,
            self::field_board_title_id  => self::typeInteger,
            self::field_created_at      => self::typeDatetime,
            self::field_updated_at      => self::typeDatetime
        ];
    }
?>
