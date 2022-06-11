<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables\templates;;


    /**
     * a model that has timestamps turned of.
     * columns affected by this
         * created_at
         * updated_at
     */
    abstract class ExtensionNoTimestampModel
        extends BaseModel
    {
        // Variables
            // Model
        public $timestamps = false;
    }
?>
