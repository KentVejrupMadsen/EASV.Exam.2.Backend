<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
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
    #[OA\Schema( title: 'Account Email Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class AccountEmailModel 
        extends ExtensionLabelModel
    {
        // Variables
            // constants
        #[OA\Property( title:'Account emails table name',
                       type: self::typeDatabaseModel,
                       deprecated: false )]
        protected const table_name = 'account_emails';

                // fields
        protected const field_content = ExtensionLabelModel::field_content;

            // Models
        protected $table = self::table_name;
        protected $primaryKey = self::identity;
    }
?>