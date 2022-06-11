<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
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

        protected const model_type = 'table';

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
