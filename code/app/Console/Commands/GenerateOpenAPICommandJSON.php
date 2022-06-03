<?php
    namespace App\Console\Commands;

    // External Libraries
    use Illuminate\Console\Command;
    use Illuminate\Support\Facades\Storage;

    use OpenApi\Generator;



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
            $currentPath = getcwd();
            $this->info( $currentPath );

            $search_directory = $currentPath . '/app';

            $result = Generator::scan( [$search_directory] );
            Storage::disk( 'local' )->put( 'swagger.json', $result->toJson() );

            $this->info( 'operation is complete' );
            return 0;
        }
    }
?>
