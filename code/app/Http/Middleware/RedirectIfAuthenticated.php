<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Middleware;

	// Internal
    use App\Providers\RouteServiceProvider;
    
    // External
    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;


    class RedirectIfAuthenticated
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
         * @param  string|null  ...$guards
         * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
         */
        public function handle( Request $request, Closure $next, ...$guards )
        {
            $guards = empty($guards) ? [null] : $guards;

            foreach ($guards as $guard)
            {
                if (Auth::guard($guard)->check())
                {
                    return redirect(RouteServiceProvider::HOME);
                }
            }

            return $next($request);
        }
    }
?>
