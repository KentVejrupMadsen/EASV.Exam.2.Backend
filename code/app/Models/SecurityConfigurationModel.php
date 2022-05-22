<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models;


    use App\Models\templates\ExtensionNoTimestampModel;

class SecurityConfigurationModel
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
