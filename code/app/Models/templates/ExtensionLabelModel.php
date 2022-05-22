<?php
    namespace App\Models\templates;


    /**
     *
     */
    abstract class ExtensionLabelModel
        extends BaseModel
    {
        public $timestamps = false;

        protected $fillable =
        [
            'content'
        ];


        protected $casts =
        [
            'content' => 'string'
        ];
    }
?>
