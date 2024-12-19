<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class ServeAndDev extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:serve-and-dev';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Laravel development server and Vite (npm run dev) concurrently';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Start Laravel development server
        $this->info('Starting Laravel server on http://localhost:8000');
        $serve = new Process(['php', 'artisan', 'serve']);
        $serve->start();

        // Start Vite development server (npm run dev)
        $this->info('Starting Vite development server...');
        $vite = new Process(['npm', 'run', 'dev']);
        $vite->start();

        // Monitor both processes
        while ($serve->isRunning() && $vite->isRunning()) {
            usleep(500000); // Wait 500ms to avoid busy-waiting
        }

        // Check for errors if any process stops
        if (!$serve->isRunning()) {
            $this->error('Laravel server stopped unexpectedly.');
            $this->error($serve->getErrorOutput());
        }

        if (!$vite->isRunning()) {
            $this->error('Vite development server stopped unexpectedly.');
            $this->error($vite->getErrorOutput());
        }

        return Command::SUCCESS;
    }
}
