<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
	
	
    return 
    [
        'mailgun' => 
        [
            'domain' => env( 'MAILGUN_DOMAIN' ),
            'secret' => env( 'MAILGUN_SECRET' ),
            'endpoint' => env( 'MAILGUN_ENDPOINT', 'api.mailgun.net' ),
            'scheme' => 'https',
        ],
        'postmark' => 
        [
            'token' => env( 'POSTMARK_TOKEN' ),
        ],
        'ses' => 
        [
            'key' => env( 'AWS_ACCESS_KEY_ID' ),
            'secret' => env( 'AWS_SECRET_ACCESS_KEY' ),
            'region' => env( 'AWS_DEFAULT_REGION', 'us-east-1' ),
        ],

    ];
?>
