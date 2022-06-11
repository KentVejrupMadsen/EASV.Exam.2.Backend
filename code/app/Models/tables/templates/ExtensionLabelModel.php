<?php
    /**
    * Author: Kent vejrup Madsen
    * Contact: Kent.vejrup.madsen@protonmail.com
    * Description:
    * TODO: Make description
    */
    namespace App\Models\tables\templates;;


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


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_content
        ];

        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_content => 'string'
        ];
    }
?>
