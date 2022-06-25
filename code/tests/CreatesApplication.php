<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Tests;

    use Illuminate\Contracts\Console\Kernel;


    trait CreatesApplication
    {
        public function createApplication()
        {
            $app = require __DIR__.'/../bootstrap/app.php';

            $app->make( Kernel::class )->bootstrap();

            return $app;
        }
    }
?>
