<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\templates;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'table',
                 type: 'table',
                 deprecated: false )]
    abstract class BaseModel
        extends Model
    {
        use HasFactory;

        public const typeString = 'string';
        public const typeInteger = 'integer';
        public const typeDouble = 'double';
        public const typeFloat = 'float';
        public const typeArray = 'array';

        // Various use cases of datetime
    }
?>
