<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Maintenance;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maintenances = Maintenance::orderBy('created_at', 'desc')->get();

        $data = array(
            'maintenances'=>$maintenances
        );
       
        return view('admin.maintenance.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.maintenance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $main = Maintenance::create([
            'message' => $request->input('message'),
           
        ]);
        return redirect('/dashboard/maintenance')
        ->with('success','Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maintenance = Maintenance::where('id', $id)->first();
      
        $data = array(
            'maintenance' => $maintenance,
           
        );

        return view('admin.maintenance.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id= $request->input('maintenance_id');
       $maintenance =  Maintenance::where('id',$id)->first();

       $maintenance->message = $request->input('message');
       $maintenance->save();
       return redirect('/dashboard/maintenance')
       ->with('success','Updated successfully');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function activate($id)
    {
        $maintenance =  Maintenance::find($id);
       $maintenance->active = 1;
        
       $maintenance->update();
        return redirect('/dashboard/maintenance')
       ->with('success','Maintenance Mode Activated');
    }

    public function deactivate($id)
    {
        $maintenance =  Maintenance::find($id);
        $maintenance->active = 0;
         
        $maintenance->update();
         return redirect('/dashboard/maintenance')
        ->with('success','Maintenance Mode Dectivated');
    }
}
