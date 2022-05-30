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


    class BoardTitleModel
        extends ExtensionLabelModel
    {
        protected $table = 'board_titles';
    }
?>
