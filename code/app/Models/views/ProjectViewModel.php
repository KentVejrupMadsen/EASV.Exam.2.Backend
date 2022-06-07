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
        #[OA\Property( type: 'string' )]
        public const table_name = 'projects_view';
        protected $table = self::table_name;


        /**
         * @var string[]
         */
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


        /**
         * @var string[]
         */
        protected $hidden =
        [
            'id',
            'account_owner_id'
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            'id'                => self::typeInteger,
            'account_owner_id'  => self::typeInteger,

            'project_title' => self::typeString,
            'description'   => self::typeString,

            'tags' => self::typeArray,

            'created_at' => self::typeTimestamp,
            'updated_at' => self::typeTimestamp
        ];
    }
?>
