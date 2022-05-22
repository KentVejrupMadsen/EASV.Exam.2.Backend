<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;


    use App\Models\templates\ExtensionNoTimestampModel;

    /**
     *
     */
    class CSRFModel
        extends ExtensionNoTimestampModel
    {
        protected $table = 'security_csrf_token';

        protected $fillable = 
        [
            'assigned_to',
            'secure_token',
            'issued',
            'accessed',
            'activated',
            'invalidated',
            'secret_token'
        ];

        
        protected $hidden = 
        [
            'secure_token',
            'secret_token'
        ];

        
        protected $casts = 
        [
            'assigned_to'   => 'string',
            'secure_token'  => 'string',
            'secret_token'  => 'string',
            'issued'        => 'datetime',
            'accessed'      => 'datetime',
            'activated'     => 'boolean',
            'invalidated'   => 'boolean'
        ];
    }
?>