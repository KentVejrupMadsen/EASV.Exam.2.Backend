<?php
    namespace App\Console\Commands;

    // External Libraries
    use Illuminate\Console\Command;


    final class GenerateOpenAPICommandYAML
        extends Command
    {
        protected $signature = 'generate:openapi-yaml';
        protected $description = 'generates a openapi file to make the specification file';


        public final function handle()
        {
            return 0;
        }
    }
?>