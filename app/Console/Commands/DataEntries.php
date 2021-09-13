<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Revolution\Google\Sheets\Facades\Sheets;
use App\Jobs;


class DataEntries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sheet:dataentries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates excel sheet with counter of jobs posted by an operator in 24 hours';

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
     * @return mixed
     */
    public function handle()
    {
        $date = \Carbon\Carbon::today()->subDays(1);
        $operaotrs = Jobs::distinct()->get(['data_oprator']);
        $op_entries = array();
        foreach($operaotrs as $operaotr){

           
        $entries = Jobs::where('data_oprator',$operaotr->data_oprator)
        ->where('created_at','>=', $date)->count();

        if($entries){
                    
            $append = [
                $operaotr->data_oprator,
                $entries,
               \Carbon\Carbon::today()
               ];
   
   
       Sheets::spreadsheet('1pDNB4oSGpzYYRetHvwk2APUyn3AeQQToZ8bKMWkvDtc')
     ->sheet('Sheet1')
     ->append([$append]);
            }

        }
                    
           
       
        
       $this->info('Sheet updated');
    }
}
