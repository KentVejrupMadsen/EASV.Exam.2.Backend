<?php

<<<<<<< HEAD
    use Illuminate\Foundation\Inspiring;
    use Illuminate\Support\Facades\Artisan;

    /*
    Artisan::command('inspire', function () {
        $this->comment(Inspiring::quote());
    })->purpose('Display an inspiring quote');
    */
?>
=======
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
>>>>>>> a17ee82b33bb976bbf37d38de9021d162f25cc15
