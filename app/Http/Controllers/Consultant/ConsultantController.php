<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Consultant;
use App\Skill;
use Auth;
use Image;

class ConsultantController extends Controller
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
        $consultant = Consultant::where('user_id',$user_id)->first();
        

        $data = array(
            'consultant'=>$consultant,
            
        );
        // dd($data);
        return view('consultant.edit')->with($data);
    }

    public function uploadCropImage(Request $request){
        $folderPath = public_path('storage/site/images/users/consultant/');
        
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
         
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        
      
        $imageName = uniqid().'_'.time().'.'.'png';

        
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
        $consultant = Consultant::where('user_id',Auth::id())->first();
        if($consultant->logo != 'noimage.png')

            {

                Storage::delete('public/site/images/users/consultant/'.$consultant->logo);

            }
        $consultant->logo = $imageName;
          
         $consultant->save();
    
        return response()->json(['success'=>'Crop Image Uploaded Successfully', 'image' => $imageName]);
     


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
        $consultant = Consultant::where('user_id',Auth::id())->first();
        
       
        if($request->hasFile('logo')){
            
            // Modified //
             

            //get filename with extension
            $filenamewithextension = $request->file('logo')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
         
             
            //Upload File
            $request->file('logo')->storeAs('public/site/images/users/consultant/', $fileNameToStore);
            
 
            
            //create cover thumbnail
            $coverthumbnailpath = public_path('storage/site/images/users/consultant/'.$fileNameToStore);
            $info = $this->createThumbnail($coverthumbnailpath, $request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));     
            
            // Modified End
            

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
        $consultant->compensation = $request->input('compensation');

        

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
        return redirect('/consultant/'.$consultant->user_id.'/edit')
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
    public function createThumbnail($path, $width, $height, $x1, $y1)
    {
        // dd($path);
        $img = Image::make($path);
        $img->crop( $width, $height, $x1, $y1);
            $img->save($path);
        // $img->save($path);
    }
}
