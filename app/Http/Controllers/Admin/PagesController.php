<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs;
class PagesController extends Controller
{
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        // dd();
        return view('admin.home');
    }
    public function data_operators()
    {
        $operaotrs = Jobs::distinct()->get(['data_oprator']);
        $op_entries = array();
        foreach($operaotrs as $operaotr){

           
        $entries = Jobs::where('data_oprator',$operaotr->data_oprator)->count();

        $op_entries[$operaotr->data_oprator] = $entries;
            

        }
        
        $data = array(
            'op_entries' => $op_entries,

        );
       
        return view('admin.pages.data_operators')->with($data);
    }
    public function login(){
        return view ('admin.pages.login');
    }
    public function database(){
        return view ('admin.pages.database');
    }
}
