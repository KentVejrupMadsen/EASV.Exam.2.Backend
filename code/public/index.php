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
    // External libraries
    use Illuminate\Contracts\Http\Kernel;
    use Illuminate\Http\Request;

    define( 'LARAVEL_START', microtime( true ) );

    if ( file_exists( $maintenance = __DIR__.'/../storage/framework/maintenance.php' ) ) 
    {
        require $maintenance;
    }

    require __DIR__.'/../vendor/autoload.php';

    $app = require_once __DIR__.'/../bootstrap/app.php';

    $kernel = $app->make( Kernel::class );

    $response = $kernel->handle(
        $request = Request::capture()
    )->send();

    $kernel->terminate( $request, $response );
?>
