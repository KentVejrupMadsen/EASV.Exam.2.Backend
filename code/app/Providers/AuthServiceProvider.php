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
    use Illuminate\Foundation\Support\Providers\AuthServiceProvider
        as ServiceProvider;

    use Illuminate\Support\Facades\Gate;


    class AuthServiceProvider
        extends ServiceProvider
    {
        /**
         * The policy mappings for the application.
         *
         * @var array<class-string, class-string>
         */
        protected $policies =
        [
            // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        ];

        /**
         * Register any authentication / authorization services.
         *
         * @return void
         */
        public function boot()
        {
            $this->registerPolicies();

            //
        }
    }
?>
