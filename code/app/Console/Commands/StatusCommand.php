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

    // External libraries
    use Illuminate\Console\Command;


    /**
     *
     */
    final class StatusCommand
        extends Command
    {
        protected $signature = 'status:status';
        protected $description = 'retrieve the current state of the system';


        /**
         * @return int
         */
        public final function handle(): int
        {
            return 0;
        }
    }
?>