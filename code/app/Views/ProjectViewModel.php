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
    #[OA\Schema( title: 'Project View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class ProjectViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        public const table_name = 'projects_view';
        protected $table = self::table_name;


        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_id = 'id';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_account_owner_id = 'account_owner_id';


        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_project_title = 'project_title';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_description = 'description';

        #[OA\Property( type: 'string', readonly: true, writeOnly: false, deprecated: false )]
        protected const field_tags = 'tags';


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
            self::field_account_owner_id,
            self::field_project_title,
            self::field_description,
            self::field_tags,
            self::field_created_at,
            self::field_updated_at
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id,
            self::field_account_owner_id
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id                => self::typeInteger,
            self::field_account_owner_id  => self::typeInteger,

            self::field_project_title => self::typeString,
            self::field_description   => self::typeString,

            self::field_tags => self::typeArray,

            self::field_created_at => self::typeTimestamp,
            self::field_updated_at => self::typeTimestamp
        ];
    }
?>
