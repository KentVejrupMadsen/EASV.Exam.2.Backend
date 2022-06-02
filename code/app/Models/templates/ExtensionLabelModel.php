<?php
    /**
    * Author: Kent vejrup Madsen
    * Contact: Kent.vejrup.madsen@protonmail.com
    * Description:
    * TODO: Make description
    */
    namespace App\Models\templates;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    abstract class ExtensionLabelModel
        extends BaseModel
    {
        // Variables
            // Model
        public $timestamps = false;

            // Constants
        #[OA\Property()]
        public const field_content = 'content';


        //
        protected $fillable =
        [
            self::field_content
        ];


        protected $casts =
        [
            self::field_content => 'string'
        ];
    }
?>
