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


        //
        #[OA\Property(
            property: 'fillable',
            schema: ProjectMemberModel::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'integer'))]
        protected $fillable = 
        [
            self::project_id,
            self::account_id,
            self::member_group_id
        ];


        #[OA\Property(
            property: 'hidden',
            schema: ProjectMemberModel::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'integer'))]
        protected $hidden = 
        [
            self::project_id,
            self::account_id,
            self::member_group_id
        ];

        
        protected $casts = 
        [
            self::project_id        => 'integer',
            self::account_id        => 'integer',
            self::member_group_id   => 'integer'
        ];
    }
?>