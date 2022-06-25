<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * License:
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     */
    namespace App\Console\Commands;

    // External Libraries
    use Illuminate\Console\Command;
    use Illuminate\Support\Facades\Storage;

    use OpenApi\Generator;


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
            $currentPath = getcwd();
            $search_directory = $currentPath . '/app';

            $result = Generator::scan( [$search_directory] );

            Storage::disk( 'local' )->put( 'swagger.yaml',
                                           $result->toYaml() );

            $this->info( 'operation is complete' );
            return 0;
        }
    }
?>
