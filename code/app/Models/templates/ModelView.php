<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\templates;


    /**
     *
     */
    abstract class ModelView
        extends BaseModel
    {
        public $timestamps = false;
        public const model_view = 'view';
    }
?>
