<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Providers;

	// External
    use Illuminate\Support\Facades\Broadcast;
    use Illuminate\Support\ServiceProvider;


    class BroadcastServiceProvider
        extends ServiceProvider
    {
        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
            Broadcast::routes();

            require base_path('routes/channels.php');
        }
    }
?>
