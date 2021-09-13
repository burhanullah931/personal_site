<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Consultant;
use App\Skill;
use Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\User;
use App\JobCategory;

class AddConsultantController extends Controller
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
        return view('addconsultant.index')->with($data);
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
        
        $user = User::create([
            'name' => $request->input('fname').' '.$request->input('lname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        

     
            $user->assignRole('consultant');
            $consultant = new Consultant;

            $consultant->user_id = $user->id;
            $consultant->first_name = $request->input('fname');
            $consultant->last_name = $request->input('lname');
            $consultant->job_title = $request->input('title');
            $consultant->summary = $request->input('summary');
            $consultant->organization = $request->input('company');
           
            $consultant->region = $request->input('state');
            $consultant->country = $request->input('country');
            $consultant->website = $request->input('website');
            $consultant->linkedin = $request->input('linkedin');
            $consultant->current_salary = $request->input('hourly_rate');
            $consultant->compensation = $request->input('compensation');
            $consultant->category_id = $request->input('category_id');
            $consultant->manual = 1;
            $consultant->active = 1;

            if($request->hasFile('logo')){
            

                $fileNameWithExt = $request->file('logo')->getClientOriginalName();
    
    
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    
                $extension = $request->file('logo')->getClientOriginalExtension();
    
    
    
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
    
    
    
                $path = $request->file('logo')->storeAs('public/site/images/users/consultant/', $fileNameToStore);
                
    
            }

            if($request->hasFile('logo')){

                if($consultant->logo != 'noimage.png')
    
                {
    
                    Storage::delete('public/site/images/users/consultant/'.$consultant->logo);
    
                }
    
                $consultant->logo = $fileNameToStore;
                 
            }

        
           
            $user_slug = str_slug($user->name);
            $last_record = Consultant::find(\DB::table('consultant')->max('id'));
            if($last_record){
            $incremented_id = $last_record->id + 1;}
            else{ $incremented_id =1;}
            $user_exist = Consultant::where('slug', $user_slug)->first();
            if ($user_exist) {
                $consultant->slug = $user_slug . '-' . $incremented_id;
            } else {
                $consultant->slug = $user_slug;
            }
            $consultant->save();

            $skills[] = $request->input('skills');
            // dd($skills[0]);


        $consultant->skills()->delete();

        foreach($skills[0] as $skill) {
            // dd($skill);
            $newskill = new Skill;
            $newskill->title = $skill;
            $newskill->consultant_id = $consultant->id;
 
             $consultant->skills()->save($newskill);

        }
        return redirect('/add_consultant')
        ->with('success','Consultant added successfully');
    
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
