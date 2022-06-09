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
    use App\Models\templates\ExtensionLabelModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Board Title Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class BoardTitleModel
        extends ExtensionLabelModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'board_titles';

        protected $table = self::table_name;
        public const field_content = ExtensionLabelModel::field_content;
    }
?>
