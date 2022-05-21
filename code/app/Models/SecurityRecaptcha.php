<?php
    namespace App\Models;


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