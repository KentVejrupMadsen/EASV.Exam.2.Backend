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
    abstract class ExtensionNoTimestampModel
        extends BaseModel
    {
        public $timestamps = false;
    }
?>
