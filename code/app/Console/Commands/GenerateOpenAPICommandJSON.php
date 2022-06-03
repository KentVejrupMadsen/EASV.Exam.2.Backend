<?php
    namespace App\Console\Commands;

    use Illuminate\Console\Command;


    final class GenerateOpenAPICommandJSON
        extends Command
    {
        protected $signature = 'generate:openapi-json';
        protected $description = 'generates a openapi file to make the specification file';


        public function handle()
        {
            return 0;
        }
    }
?>
