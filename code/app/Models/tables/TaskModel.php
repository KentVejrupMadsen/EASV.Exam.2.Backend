<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\ExtensionNoTimestampModel;

    use OpenApi\Attributes
        as OA;

    /**
     *
     */
    #[OA\Schema()]
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
        #[OA\Property( )]
        protected $fillable = 
        [
            self::field_board_id,
            self::field_content
        ];

        
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