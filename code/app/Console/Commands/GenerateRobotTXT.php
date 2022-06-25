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


    /**
     *
     */
    final class GenerateRobotTXT
        extends Command
    {
        protected $signature = 'generate:robot';
        protected $description = 'generates the robot.txt file to be parsed by google crawlers';


        /**
         * @return int
         */
        public final function handle(): int
        {
            return 0;
        }
    }
?>