<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs;
use App\JobCategory;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = JobCategory::orderBy('name', 'asc')->paginate(20);
        
        $data = array(
            'cats'=>$cats
        );
        return view('admin.cats.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new JobCategory;
        $cat->name= $request->input('title');
        $cat->save();
        return redirect('/dashboard/categories')
        ->with('success','Category added successfully');
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
        // $jobcat = JobCategory::all();
        $cat = JobCategory::where('id', $id)->first();
        $data = array(
            'cat'=>$cat

        );

        return view('admin.cats.edit')->with($data);
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
        // $id= $request->input('cat_id');
        $cat = JobCategory::where('id',$id)->first();
        $cat->name= $request->input('title');
        $cat->update();
        return redirect('/dashboard/categories')
        ->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = JobCategory::find($id);
        $cat->delete();
        return redirect('/dashboard/categories')
       ->with('success','Category deleted successfully');
    }
    public function search(Request $request)
    {
       
        $keyword = $request->input('keyword');
        $jobs = Jobs::where('job_title','LIKE','%'.$keyword.'%')->latest()->paginate(20);
      
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
