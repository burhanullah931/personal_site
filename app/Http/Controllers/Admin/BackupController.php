<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Zip;
use Response;

class BackupController extends Controller
{
    public function downloadstorage(){
            $filename= 'backups/torage_backup_'.time();
            $zip = Zip::create($filename.'.zip');
            $zip->add(storage_path('app/public')); // 
            $zip->close();
            $file=public_path($filename.'.zip');
            // dd($file);
            // return response()->download($file);
        return Response::download($file);
    }
    public function downloaddatabase(){
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
