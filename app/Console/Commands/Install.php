<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nsp:install {db=refresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrates Database , Seeds Database, Sets in env';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $type = $this->argument('db');
        $acceptedArgs = ['fresh', 'refresh'];

        if (in_array($type, $acceptedArgs)) {
            $this->line('Received Type ' . $this->argument('db'));
            // $this->verifyPHPVersion();
            // $this->verifyExtensions();
            // $this->verifyWritePermissions();
            // $this->generateAppKey();
            $this->setupDatabase($type);
            $this->seedDatabase();
            // $this->configurePassport();
            // $this->clearCache();
            $this->info('Installation Complete');
        } else {
            $this->error('Invalid Argument ' . $type);
        }

    }

     /**
     * Run all the seeders.
     * @return void
     */
    protected function seedDatabase()
    {
        $this->line('Seeding Database..........');
        $this->call('db:seed');
        $this->info('Database Seeding Successful');
    }


     
    /**
     * Setup the database.
     *
     * @return void
     */
    protected function setupDatabase($type)
    {
        $this->line('Installing the database...');
        if ($type == "fresh") {
            $this->info('Running Fresh Database Migration');
            $this->call('migrate:fresh', ['--force' => true]);
        } else {
            $this->info('Running  Database Refresh');
            $this->call('migrate:refresh');
        }
        $this->info('Database installed successfully.');
    }
}