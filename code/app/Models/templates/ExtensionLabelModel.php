<?php
    namespace App\Models\templates;


    /**
     *
     */
    abstract class ExtensionLabelModel
        extends BaseModel
    {
        // Variables
            // Model
        public $timestamps = false;

            // Constants
        protected const field_content = 'content';


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
