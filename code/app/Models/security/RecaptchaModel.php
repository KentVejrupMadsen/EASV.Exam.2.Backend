<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
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
        // Variables
            // Table
        protected $table = 'security_recaptcha';

            // Const
        protected const field_success   = 'success';
        protected const field_score     = 'score';
        protected const field_at_date   = 'at_date';
        protected const field_hostname  = 'hostname';
        protected const field_error     = 'error';


        //
        protected $fillable =
        [
            self::field_success,
            self::field_score,
            self::field_at_date,
            self::field_hostname,
            self::field_error
        ];


        protected $hidden =
        [
            self::field_hostname,
            self::field_error
        ];


        protected $casts =
        [
            self::field_success     => 'boolean',
            self::field_score       => 'double',
            self::field_at_date     => 'datetime',
            self::field_hostname    => 'string',
            self::field_error       => 'string'
        ];
    }
?>