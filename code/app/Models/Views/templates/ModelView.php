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
    namespace App\Models\Views\templates;

	// External
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    abstract class ModelView
        extends Model
    {
        // the views are static/won't be updated.
        public $timestamps = false;

        //
        protected const model_type = 'view';

        protected  const typeString = 'string';
        protected const typeInteger = 'integer';
        protected const typeDouble = 'double';
        protected const typeFloat = 'float';
        protected const typeArray = 'array';
        protected const typeBoolean = 'boolean';

        protected const typeDatetime = 'datetime';
        protected const typeTimestamp = 'timestamp';

        // Various use cases of datetime

    }
?>
