<?php
    namespace App\Console\Commands;

    use Illuminate\Console\Command;


    final class GenerateOpenAPICommandYAML
        extends Command
    {
        protected $signature = 'generate:openapi-yaml';
        protected $description = 'generates a openapi file to make the specification file';


        public function handle()
        {
            return 0;
        }
    }
?>
