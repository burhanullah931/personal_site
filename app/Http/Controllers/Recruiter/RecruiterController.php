<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recruiter;
use Auth;
use Illuminate\Support\Facades\Storage;


class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user_id =Auth::id();
        $recruiter = Recruiter::where('user_id',$user_id)->first();
        $data = array(
            'recruiter'=>$recruiter
        );
        return view('recruiter.edit',$data);
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
        $recruiter = Recruiter::where('user_id',Auth::id())->first();
        if($request->hasFile('logo')){
            

            $fileNameWithExt = $request->file('logo')->getClientOriginalName();


            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('logo')->getClientOriginalExtension();



            $fileNameToStore = $fileName.'_'.time().'.'.$extension;



            $path = $request->file('logo')->storeAs('public/site/images/users/recruiter', $fileNameToStore);
            

        }

        

        $recruiter->first_name = $request->input('fname');

        $recruiter->last_name = $request->input('lname');

        $recruiter->job_title = $request->input('title');

        $recruiter->summary = $request->input('summary');

        $recruiter->full_address = $request->input('address');
        $recruiter->city = $request->input('city');
        $recruiter->region = $request->input('state');
        $recruiter->country = $request->input('country');


        if($request->hasFile('logo')){

            if($recruiter->logo != 'noimage.png')

            {

                Storage::delete('public/site/images/users/recruiter'.$recruiter->logo);

            }

            $recruiter->logo = $fileNameToStore;
             
        }

       

        $recruiter->save();
        return redirect('/recruiter/'.$recruiter->user_id.'/edit')
        ->with('success','Profile updated successfully');
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
