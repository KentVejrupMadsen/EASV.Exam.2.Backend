<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal
    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionLabelModel;

    // External
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Person Firstname Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class PersonFirstnameModel
        extends ExtensionLabelModel
    {
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       deprecated: false )]
        protected const table_name = 'person_name_first';
        protected $table = self::table_name;

        protected const field_content = ExtensionLabelModel::field_content;
    }
?>
