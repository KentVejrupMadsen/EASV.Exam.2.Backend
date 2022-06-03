<?php
    namespace App\Console\Commands;

    // External Libraries
    use Illuminate\Console\Command;


    final class GenerateRobotTXT
        extends Command
    {
        protected $signature = 'generate:robot';
        protected $description = 'generates the robot.txt file to be parsed by google crawlers';


        public final function handle()
        {
            return 0;
        }
    }
?>