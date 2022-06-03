<?php
    namespace App\Console\Commands;

    // External Libraries
    use Illuminate\Console\Command;


    /**
     *
     */
    final class GenerateOpenAPICommandYAML
        extends Command
    {
        protected $signature = 'generate:openapi-yaml';
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
