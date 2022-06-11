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
                 deprecated: false )]
    class ApartmentLevelModel
        extends ExtensionLabelModel
    {
        #[OA\Property( type: 'string' )]
        protected const table_name = 'apartment_levels';

        // Variable

            // Table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;

        // Constant

    }
?>