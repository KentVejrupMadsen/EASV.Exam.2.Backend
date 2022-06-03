<?php
    namespace App\Console\Commands;

    use Illuminate\Console\Command;


    final class GenerateRobotTXT
        extends Command
    {
        protected $signature = 'generate:robot';
        protected $description = 'generates the robot.txt file to be parsed by google crawlers';


        public function handle()
        {
            return 0;
        }
    }
?>