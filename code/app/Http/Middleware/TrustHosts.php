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

	// External
    use Illuminate\Http\Middleware\TrustHosts
        as Middleware;


    class TrustHosts
        extends Middleware
    {
        /**
         * Get the host patterns that should be trusted.
         *
         * @return array<int, string|null>
         */
        public function hosts()
        {
            return
            [
                $this->allSubdomainsOfApplicationUrl(),
            ];
        }
    }

?>
