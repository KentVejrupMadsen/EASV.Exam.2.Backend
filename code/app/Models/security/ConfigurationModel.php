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
    class ConfigurationModel
        extends ExtensionNoTimestampModel
    {
        protected $table = 'security_configuration';


        protected $fillable =
        [
            'key',
            'value'
        ];


        protected $hidden =
        [
            'value'
        ];


        protected $casts =
        [
            'key' => 'string',
            'value' => 'string'
        ];
    }
?>
