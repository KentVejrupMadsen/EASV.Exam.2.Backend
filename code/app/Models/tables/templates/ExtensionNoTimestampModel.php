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
    namespace App\Models\tables\templates;


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
