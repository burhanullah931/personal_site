<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs;
use App\JobCategory;

class DataopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $dataop = $user->dataop;
        // dd($dataop->data_name);
        $jobs = Jobs::where('data_oprator',$dataop->data_name )->orderBy('created_at', 'desc')->paginate(20);
        $total = Jobs::where('data_oprator',$dataop->data_name )->get();
        // dd($jobs);
        $data = array(
            'jobs'=>$jobs,
            'total'=>$total
        );
        return view('admin.dataopjobs.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $jobcat = JobCategory::all();
        $job = Jobs::where('id', $id)->first();
        $data = array(
            'job' => $job,
            'jobcat'=>$jobcat

        );

        return view('admin.jobs.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $jobcat = JobCategory::all();
        $job = Jobs::where('id', $id)->first();
        $data = array(
            'job' => $job,
            'jobcat'=>$jobcat

        );

        return view('admin.jobs.edit')->with($data);
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
        $id= $request->input('job_id');
        $job = Jobs::where('id',$id)->first();

        $job->job_title = $request->input('title');
        $job->employer = $request->input('employer');
        $job->location = $request->input('location');
        $job->joblink = $request->input('job_link');
        $job->job_category_id = $request->input('job_category_id');
        $job->description = $request->input('description');
        $job->update();
        return redirect('/dashboard/jobs')
        ->with('success','Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Jobs::find($id);
        $job->delete();
        return redirect('/dashboard/jobs')
       ->with('success','Job deleted successfully');
    }
    public function search(Request $request)
    {
       
        $id = $request->input('keyword');
        $jobs = Jobs::where('id',$id)->latest()->paginate(20);
      
        $data = array(
            'jobs'=>$jobs
        );
        
        return view('admin.jobs.index')->with($data);
    }
    public function feature($id)
    {

       $job = Jobs::find($id);
       $job->featured = 1;
       $job->update();

      
        return redirect('/dashboard/jobs')
       ->with('success','Job has been featured');
    }

    public function unfeature($id)
    {
        $job = Jobs::find($id);
       $job->featured = 0;
       $job->update();

      
        return redirect('/dashboard/jobs')
       ->with('success','Job has been unfeatured');
    }
}
