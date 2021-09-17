<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Consultant;
use App\User;
use App\Skill;


class ConsultanteditController extends Controller
{
    public function editshow(){

        
        return view('editor.form');


    }


    public function editform(Request $request)
    {

        $email =$request->input('email');
        $user = User::where('email', $email)->first();
        if($user){
        $consultant = Consultant::where('user_id', $user->id)->first();
        $data = array(
            'consultant' => $consultant
        );

        return view('editor.edit')->with($data);

        }else{

            abort(403, 'Consusltant Not Found.');
        }

    }




    public function updateprofile(Request $request)
    {
       $id= $request->input('consultant_id');
        $consultant = Consultant::where('id',$id)->first();
        

        if($request->hasFile('logo')){
            

            $fileNameWithExt = $request->file('logo')->getClientOriginalName();


            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('logo')->getClientOriginalExtension();



            $fileNameToStore = $fileName.'_'.time().'.'.$extension;



            $path = $request->file('logo')->storeAs('public/site/images/users/consultant', $fileNameToStore);
            

        }

        

        $consultant->first_name = $request->input('fname');
        $consultant->last_name = $request->input('lname');
        $consultant->job_title = $request->input('title');
        $consultant->summary = $request->input('summary');
        $consultant->full_address = $request->input('address');
        $consultant->city = $request->input('city');
        $consultant->region = $request->input('state');
        $consultant->country = $request->input('country');
        $consultant->website = $request->input('website');
        $consultant->linkedin = $request->input('linkedin');
        $consultant->current_salary = $request->input('hourly_rate');

        if($request->hasFile('logo')){

            if($consultant->logo != 'noimage.png')

            {

                Storage::delete('public/site/images/users/consultant'.$consultant->logo);

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
        return redirect(route('consultants.page'))
        ->with('success','Profile updated successfully');
    }

}
