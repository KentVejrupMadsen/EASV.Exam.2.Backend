<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\templates\BaseModel;
    use App\Models\templates\ExtensionNoTimestampModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Task Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class TaskModel
        extends ExtensionNoTimestampModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'tasks';

        // variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property( type: 'string' )]
        public const field_board_id = 'board_id';

        #[OA\Property( type: 'string' )]
        public const field_content = 'content';


        /**
         * @var string[]
         */
        protected $fillable = 
        [
            self::field_board_id,
            self::field_content
        ];


        /**
         * @var string[]
         */
        protected $hidden = 
        [
            self::field_board_id,
        ];


        /**
         * @var string[]
         */
        protected $casts = 
        [
            self::field_board_id => self::typeInteger,
            self::field_content  => self::typeString
        ];
    }
?>