<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
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
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class AccountEmailModel 
        extends ExtensionLabelModel
    {
        // Variables
            // constants
        #[OA\Property( title: 'Account emails table name',
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
