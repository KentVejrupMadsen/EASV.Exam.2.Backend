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


    #[OA\Schema()]
    class ProjectViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'projects_view';
        protected $table = self::table_name;

        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 7,
            minimum: 7,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            'id',
            'account_owner_id',
            'project_title',
            'description',
            'tags',
            'created_at',
            'updated_at'
        ];


        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 2,
            minimum: 2,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            'id',
            'account_owner_id'
        ];


        protected $casts =
        [
            'id'                => 'integer',
            'account_owner_id'  => 'integer',

            'project_title' => 'string',
            'description'   => 'string',

            'tags' => 'array',

            'created_at' => 'timestamp',
            'updated_at' => 'timestamp'
        ];
    }
?>
