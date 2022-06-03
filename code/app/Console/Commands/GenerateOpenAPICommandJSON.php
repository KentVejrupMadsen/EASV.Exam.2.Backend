<?php
    namespace App\Console\Commands;

    // External Libraries
    use Illuminate\Console\Command;


    /**
     *
     */
    final class GenerateOpenAPICommandJSON
        extends Command
    {
        protected $signature = 'generate:openapi-json';
        protected $description = 'generates a openapi file to make the specification file';

        /**
         * @return int
         */
        public final function handle(): int
        {
            return 0;
        }
    }
?>
