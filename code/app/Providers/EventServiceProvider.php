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
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Auth\Listeners\SendEmailVerificationNotification;

    use Illuminate\Foundation\Support\Providers\EventServiceProvider
        as ServiceProvider;

    use Illuminate\Support\Facades\Event;


    class EventServiceProvider
        extends ServiceProvider
    {
        /**
         * The event listener mappings for the application.
         *
         * @var array<class-string, array<int, class-string>>
         */
        protected $listen = [
            Registered::class => [
                SendEmailVerificationNotification::class,
            ],
        ];

        /**
         * Register any events for your application.
         *
         * @return void
         */
        public function boot()
        {
            //
        }

        /**
         * Determine if events and listeners should be automatically discovered.
         *
         * @return bool
         */
        public function shouldDiscoverEvents()
        {
            return false;
        }
    }
?>
