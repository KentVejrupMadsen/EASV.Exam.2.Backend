<?php
    namespace App\Console\Commands;

    use Illuminate\Console\Command;


    final class GenerateSitemap
        extends Command
    {
        protected $signature = 'generate:sitemap';

        protected $description = 'generates a sitemap for search engines to crawl';


        public function handle()
        {
            return 0;
        }
    }
?>