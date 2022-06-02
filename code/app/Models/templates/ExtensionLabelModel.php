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
        #[OA\Property(type: 'boolean')]
        public $timestamps = false;

            // Constants
        #[OA\Property(type:'string')]
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
