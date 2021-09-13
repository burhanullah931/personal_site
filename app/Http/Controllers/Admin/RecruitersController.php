<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recruiter;
use App\User;

class RecruitersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruiters = Recruiter::orderBy('created_at', 'desc')->get();

        $data = array(
            'recruiters'=>$recruiters
        );
        return view('admin.recruiters.index')->with($data);
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
        $recruiter = Recruiter::where('id', $id)->first();

        $data = array(
            'recruiter' => $recruiter,

        );

        return view('admin.recruiters.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruiter = Recruiter::where('id', $id)->first();

        $data = array(
            'recruiter' => $recruiter,

        );

        return view('admin.recruiters.edit')->with($data);
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
        $id= $request->input('recruiter_id');
       $recruiter = Recruiter::where('id',$id)->first();


       if($request->hasFile('logo')){


           $fileNameWithExt = $request->file('logo')->getClientOriginalName();


           $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

           $extension = $request->file('logo')->getClientOriginalExtension();

           $fileNameToStore = $fileName.'_'.time().'.'.$extension;

           $path = $request->file('logo')->storeAs('public/site/images/users/recruiter/', $fileNameToStore);


       }



       $recruiter->first_name = $request->input('fname');
       $recruiter->last_name = $request->input('lname');
       $recruiter->job_title = $request->input('title');
       $recruiter->summary = $request->input('summary');
       $recruiter->organization = $request->input('company');

       $recruiter->region = $request->input('state');
       $recruiter->country = $request->input('country');



       if($request->hasFile('logo')){

           if($recruiter->logo != 'noimage.png')

           {

               Storage::delete('public/site/images/users/recruiter/'.$recruiter->logo);

           }

           $recruiter->logo = $fileNameToStore;

       }








       $recruiter->save();
       return redirect('/dashboard/recruiters')
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
        $recruiter = Recruiter::find($id);
        $user = User::find($recruiter->user_id);
        $user->delete();
        $recruiter->delete();
        return redirect('/dashboard/recruiters')
       ->with('success','Profile deleted successfully');
    }

    public function activate($id)
    {
        $recruiter = Recruiter::find($id);
        $recruiter_user = User::where('id', $recruiter->user_id)->first();
        $recruiter->active = 1;
        $recruiter->update();

       $data = array(
            'first_name' => $recruiter->first_name,
            'to' => $recruiter_user->email
        );

        // \Mail::send('emails.recruiter-approval-template', $data, function($message)  use ($data) {

        //     $message->to($data['to'], 'PersonalSite Inc.')

        //             ->subject('Account Approved - Personalsite');
        // });


        return redirect('/dashboard/recruiters')
       ->with('success','Recruiter Approved');
    }

    public function deactivate($id)
    {
        $recruiter = Recruiter::find($id);
       $recruiter->active = 0;

       $recruiter->update();
        return redirect('/dashboard/recruiters')
       ->with('success','Recruiter Disapproved ');
    }

    public function mail_decline(Request $request){

        $data = array(
            'first_name' => $request->first_name,
            'content' => $request->message,
            'to' => $request->email
        );

        // \Mail::send('emails.recruiter-decline-template', $data, function($message)  use ($data) {

        //     $message->to($data['to'], 'Executives Diary Inc.')

        //             ->subject('Account Decline - Personalsite');
        // });

        return redirect('/dashboard/recruiters')
       ->with('success','Recruiter Declined');

    }
}
