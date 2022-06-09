<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     *
     */
    namespace App\Console\Commands;

    // External Libraries
    use Illuminate\Console\Command;


    /**
     *
     */
    final class GenerateSitemap
        extends Command
    {
        protected $signature = 'generate:sitemap';
        protected $description = 'generates a sitemap for search engines to crawl';


        /**
         * @return int
         */
        public final function handle(): int
        {
            return 0;
        }
    }
?>