<?php
    namespace App\Models;


    use App\Models\templates\ExtensionNoTimestampModel;

    class SecurityRecaptcha
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