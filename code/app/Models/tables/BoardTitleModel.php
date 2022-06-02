<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\ExtensionLabelModel;
    use Illuminate\Database\Eloquent\Model;

    use OpenApi\Attributes
        as OA;

    #[OA\Schema()]
    class BoardTitleModel
        extends ExtensionLabelModel
    {
        #[OA\Property()]
        public const table_name = 'board_titles';
        protected $table = self::table_name;
    }
?>
