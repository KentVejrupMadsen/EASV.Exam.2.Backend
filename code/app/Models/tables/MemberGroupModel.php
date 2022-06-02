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
    class MemberGroupModel 
        extends ExtensionLabelModel
    {
        #[OA\Property()]
        public const table_name = 'member_groups';
        protected $table = self::table_name;
    }
?>