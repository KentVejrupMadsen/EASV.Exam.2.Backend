<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    use App\Models\templates\ExtensionNoTimestampModel;


    /**
     *
     */
    class RecaptchaModel
        extends ExtensionNoTimestampModel
    {
        protected $table = 'security_recaptcha';

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
            'success'   => 'boolean',
            'score'     => 'double',
            'at_date'   => 'datetime',
            'hostname'  => 'string',
            'error'     => 'string'
        ];
    }
?>
