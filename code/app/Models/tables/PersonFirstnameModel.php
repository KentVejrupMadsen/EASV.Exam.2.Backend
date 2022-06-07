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
    use App\Models\templates\ExtensionLabelModel;

    // External
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Person Firstname Model',
                 description: '',
                 type: BaseModel::class,
                 deprecated: false )]
    class PersonFirstnameModel
        extends ExtensionLabelModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'person_name_first';
        protected $table = self::table_name;

        public const field_content = ExtensionLabelModel::field_content;
    }
?>
