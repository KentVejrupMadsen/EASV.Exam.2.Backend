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


        //
        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 2,
            minimum: 2,
            items: new OA\Items(type: 'string'))]
        protected $fillable = 
        [
            self::field_board_id,
            self::field_content
        ];


        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 1,
            minimum: 1,
            items: new OA\Items(type: 'string'))]
        protected $hidden = 
        [
            self::field_board_id,
        ];

        
        protected $casts = 
        [
            self::field_board_id => 'integer',
            self::field_content  => 'string'
        ];
    }
?>