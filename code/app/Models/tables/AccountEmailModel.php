<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\ExtensionLabelModel;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class AccountEmailModel 
        extends ExtensionLabelModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'account_emails';

        protected $table = self::table_name;
    }
?>