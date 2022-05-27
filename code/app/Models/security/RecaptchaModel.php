<?php
    namespace App\Models\security;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class RecaptchaModel
        extends ExtensionNoTimestampModel
    {
        protected $table = 'security_configuration';

        protected $fillable =
        [
            'success',
            'score',
            'at_date',
            'hostname',
            'error'
        ];


        protected $hidden =
        [
            'hostname',
            'error'
        ];


        protected $casts =
        [

        ];
    }
?>