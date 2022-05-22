<?php
    namespace App\Models\templates;


    /**
     *
     */
    abstract class ExtensionNoTimestampModel
        extends BaseModel
    {
        public $timestamps = false;
    }
?>
