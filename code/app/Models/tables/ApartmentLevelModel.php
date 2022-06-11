<?php
    namespace App\Models\tables;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionLabelModel;


    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Apartment Level Model',
                 description: '',
                 type: BaseModel::model_type,
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class ApartmentLevelModel
        extends ExtensionLabelModel
    {
        // Variable

            // Constant
        #[OA\Property( title:'table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'apartment_levels';

            // Table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;
    }
?>