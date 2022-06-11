<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionNoTimestampModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Project Member Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class ProjectMemberModel 
        extends ExtensionNoTimestampModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'project_members';
        // Variables
            // Table
        protected $table = self::table_name;

            // constants
        #[OA\Property( type: 'string' )]
        public const project_id = 'project_id';

        #[OA\Property( type: 'string' )]
        public const account_id = 'account_id';

        #[OA\Property( type: 'string' )]
        public const member_group_id = 'member_group_id';


        /**
         * @var string[]
         */
        protected $fillable = 
        [
            self::project_id,
            self::account_id,
            self::member_group_id
        ];


        /**
         * @var string[]
         */
        protected $hidden = 
        [
            self::project_id,
            self::account_id,
            self::member_group_id
        ];


        /**
         * @var array
         */
        protected $casts = 
        [
            self::project_id        => self::typeInteger,
            self::account_id        => self::typeInteger,
            self::member_group_id   => self::typeInteger
        ];
    }
?>