<?php
    namespace App\Console\Commands;

    // External libraries
    use Illuminate\Console\Command;


    final class StatusCommand
        extends Command
    {
        protected $signature = 'status:status';
        protected $description = 'retrieve the current state of the system';


        public final function handle()
        {
            return 0;
        }
    }
?>