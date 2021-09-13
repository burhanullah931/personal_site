<?php

namespace App\Http\Controllers;

use DB;
use App\Jobs;
use App\UserJob;
use App\JobCategory;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobcat = JobCategory::all();
        $data = array(
            'jobcat'=>$jobcat
        );
        return view('job.index')->with($data);
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
        
        $this->validate($request, [
            'job_title' => 'required',
            'description' => 'required',
            
        ]);


        $exjob=DB::table('jobs')->where('job_title','=',$request->input('job_title'))
        ->where('employer','=',$request->input('employer'))
        ->where('location','=',$request->input('location'))
        ->first();
        // dd($exjob);
        if($exjob){
            return redirect()->route('post_job.index')
            ->with('danger','Job already exists');
        }
        $input = $request->all();
        $job = Jobs::create($input);
        return redirect()->route('post_job.index')
        ->with('success','Job created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Jobs::find($id);
        $category = JobCategory::where('id' ,$job->job_category_id )->first();
        $jobcat = JobCategory::all();

        $check = UserJob::where(['user_id' => auth()->user()->id , 'job_id' => $id])->first();
        if($check){
            $isSaved = true;
        }
        else{
            $isSaved = false;
        }
        $data = array(
            'job'=>$job,
            'category'=>$category,
            'jobcat'=>$jobcat,
            'is_saved' => $isSaved
            
        );
        return view('job.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
