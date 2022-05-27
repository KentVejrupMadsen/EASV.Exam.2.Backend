<?php
    namespace App\Models\tables;

    use App\Models\templates\ExtensionLabelModel;
    use Illuminate\Database\Eloquent\Model;


    class BoardTitleModel
        extends ExtensionLabelModel
    {
        protected $table = 'board_titles';
    }
?>
