<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
Use Exception;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:dump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup Description';
    protected $process;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $today = today()->format('Y-m-d');
        if(!is_dir(storage_path('backups'))) mkdir(storage_path('backups'));
        // $this->process= new Process(sprintf(
        //     'mysqldump -- compact --skip-comments -u%s -p%s %s > %s',
        //     config('database.connections.mysql.username'),
        //     config('database.connections.mysql.password'),
        //     config('database.connections.mysql.database'),
        //     storage_path("backups/{$today}.sql")

        // ));
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $databaseName = env('DB_DATABASE');
        $userName = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        // dd($databaseName);

        \Spatie\DbDumper\Databases\MySql::create()
    ->setDbName($databaseName)
    ->setUserName($userName)
    ->setPassword($password)
    ->dumpToFile('dump.sql');
    }
}
