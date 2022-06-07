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

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Project Model',
                 description: '',
                 type: BaseModel::class,
                 deprecated: false )]
    class ProjectModel 
        extends BaseModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'projects';

        // Variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property( type: 'string' )]
        public const field_account_owner_id  = 'account_owner_id';

        #[OA\Property( type: 'string' )]
        public const field_project_title_id  = 'project_title_id';

        #[OA\Property( type: 'string' )]
        public const field_description = 'description';

        #[OA\Property( type: 'string' )]
        public const field_tags = 'tags';

        #[OA\Property( type: 'string' )]
        public const field_created_at = 'created_at';

        #[OA\Property( type: 'string' )]
        public const field_updated_at = 'updated_at';


        //
        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 4,
            minimum: 4,
            items: new OA\Items(type: 'string'))]
        protected $fillable = 
        [
            self::field_account_owner_id,
            self::field_project_title_id,
            self::field_description,
            self::field_tags
        ];


        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 2,
            minimum: 2,
            items: new OA\Items(type: 'string'))]
        protected $hidden = 
        [
            self::field_account_owner_id,
            self::field_project_title_id
        ];

        
        protected $casts = 
        [
            self::field_account_owner_id  => 'integer',
            self::field_project_title_id  => 'integer',
            self::field_description       => 'string',
            self::field_tags              => 'string'
        ];
    }
?>