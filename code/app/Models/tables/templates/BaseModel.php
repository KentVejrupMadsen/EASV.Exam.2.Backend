<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Models\tables\templates;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    /**
     *
     */
    abstract class BaseModel
        extends Model
    {
        use HasFactory;

        protected const model_type  = 'table';
        protected const identity    = 'identity';

        protected  const typeString = 'string';
        protected const typeInteger = 'integer';
        protected const typeDouble  = 'double';
        protected const typeFloat   = 'float';
        protected const typeArray   = 'array';
        protected const typeBoolean = 'boolean';

        protected const typeDatetime    = 'datetime';
        protected const typeTimestamp   = 'timestamp';

        protected const typeDatabaseModel = 'database table';

        // Various use cases of datetime
    }
?>
