<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    return 
    [
        'paths' => 
        [
            resource_path( 'views' ),
        ],
        'compiled' => env
        (
            'VIEW_COMPILED_PATH',
            realpath( storage_path( 'framework/views' ) )
        ),
    ];
?>
