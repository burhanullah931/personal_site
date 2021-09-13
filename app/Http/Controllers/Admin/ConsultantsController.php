<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Consultant;
use App\User;
use App\Skill;
use App\JobCategory;

class ConsultantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultants = Consultant::orderBy('created_at', 'desc')->get();

        $data = array(
            'consultants'=>$consultants
        );
        return view('admin.consultants.index')->with($data);
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
        $consultant = Consultant::where('id', $id)->first();
        $jobcat = JobCategory::all();
        $data = array(
            'consultant' => $consultant,
            'jobcat'=>$jobcat
        );

        return view('admin.consultants.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultant = Consultant::where('id', $id)->first();
        $jobcat = JobCategory::all();
        $data = array(
            'consultant' => $consultant,
            'jobcat'=>$jobcat
        );

        return view('admin.consultants.edit')->with($data);
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
        // dd($request);

       $id= $request->input('consultant_id');
       $consultant = Consultant::where('id',$id)->first();


       if($request->hasFile('logo')){


           $fileNameWithExt = $request->file('logo')->getClientOriginalName();


           $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

           $extension = $request->file('logo')->getClientOriginalExtension();

           $fileNameToStore = $fileName.'_'.time().'.'.$extension;

           $path = $request->file('logo')->storeAs('public/site/images/users/consultant/', $fileNameToStore);


       }



       $consultant->first_name = $request->input('fname');
       $consultant->last_name = $request->input('lname');
       $consultant->job_title = $request->input('title');
       $consultant->summary = $request->input('summary');
       $consultant->organization = $request->input('company');
       $consultant->full_address = $request->input('address');

       $consultant->region = $request->input('state');
       $consultant->country = $request->input('country');
       $consultant->website = $request->input('website');
       $consultant->linkedin = $request->input('linkedin');
       $consultant->current_salary = $request->input('hourly_rate');
       $consultant->compensation = $request->input('compensation');
       $consultant->category_id = $request->input('category_id');


       if($request->hasFile('logo')){

           if($consultant->logo != 'noimage.png')

           {

               Storage::delete('public/site/images/users/consultant/'.$consultant->logo);

           }

           $consultant->logo = $fileNameToStore;

       }


       $skills[] = $request->input('skills');
           // dd($skills[0]);


       $consultant->skills()->delete();

       foreach($skills[0] as $skill) {
           // dd($skill);
           $newskill = new Skill;
           $newskill->title = $skill;

            $consultant->skills()->save($newskill);

       }



       $consultant->save();
       return redirect('/dashboard/consultants')
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
        $consultant = Consultant::find($id);
        $user = User::find($consultant->user_id);
        $user->delete();
        $consultant->delete();
        return redirect('/dashboard/consultants')
       ->with('success','Profile deleted successfully');
    }

    public function activate($id)
    {

       $consultant = Consultant::find($id);
       $consultant_user = User::where('id', $consultant->user_id)->first();
       $consultant->active = 1;
       $consultant->update();

       $data = array(
            'first_name' => $consultant->first_name.' '.$consultant->last_name,
            'to' => $consultant_user->email
        );

        // \Mail::send('emails.consultant-approval-template', $data, function($message)  use ($data) {

        //     $message->to($data['to'], 'PersonalSite Inc.')
        //             ->from('support@personalsite.com', 'PersonalSite Inc.')
        //             ->subject('Your Consulting Account Approved!');
        // });

        return redirect('/dashboard/consultants')
       ->with('success','Consultant Approved');
    }

    public function deactivate($id)
    {
        $consultant = Consultant::find($id);
       $consultant->active = 0;

       $consultant->update();
        return redirect('/dashboard/consultants')
       ->with('success','Consultant Disapproved ');
    }

    public function mail_decline(Request $request){


        $data = array(
            'first_name' => $request->first_name,
            'content' => $request->message,
            'to' => $request->email
        );

        // \Mail::send('emails.consultant-decline-template', $data, function($message)  use ($data) {

        //     $message->to($data['to'], 'Executives Diary Inc.')
        //         ->from('support@personalsite.com', 'PersonalSite Inc.')
        //             ->subject('Your Consulting Account Rejected');
        // });

        return redirect('/dashboard/consultants')
       ->with('success','Consultant Declined');

    }
}
