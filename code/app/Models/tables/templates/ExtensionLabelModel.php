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
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Model
        protected $primaryKey = self::identity;

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
            self::identity => 'integer',
            self::field_content => 'string'
        ];
    }
?>
