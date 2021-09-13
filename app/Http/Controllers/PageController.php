<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CaptchaValidation;
use App\User;
use App\Consultant;
use App\Jobs;
use App\Contactus;
use App\JobCategory;
use App\Faqs;
use App\Servicetags;
use App\Services;
use App\Reviews;
use DB;
use App\Orders;
use Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Session;
use Mautic\MauticApi;
use Mautic\Auth\ApiAuth;
use Revolution\Google\Sheets\Facades\Sheets;
use App\Mail\CallBack;
use App\Mail\ContactSubmit;
 
use Illuminate\Support\Facades\Mail;


class PageController extends Controller
{
    //


    public function consultantspage(){

        $consultants = Consultant::where('active',1)->orderBy('created_at', 'desc')->simplePaginate(10);
        $jobcat = JobCategory::orderBy('name', 'asc')->get();

        $data = array(
            'consultants'=>$consultants,
            'categories'=>$jobcat
        );
        return view('site.pages.consultants')->with($data);


    }
    public function opportunitiespage(){

        $jobs = Jobs::orderBy('created_at', 'desc')->simplePaginate(25);
        $featured_jobs = Jobs::Where('featured',1)->orderBy('created_at', 'desc')->latest()->get();

        $data = array(
            'jobs'=>$jobs,
            'featured_jobs'=>$featured_jobs
        );
        return view('site.pages.opportunities')->with($data);


    }
    public function servicedetails($slug){

        $service = Services::where('slug' ,$slug)->first();
        $tags = Servicetags::where('service_id' ,$service->id)->get();
        $tags_name= array();
        foreach($tags as $tag ){
            array_push($tags_name,$tag->name);
        }

        $relatedtags = Servicetags::whereIn('name', $tags_name)->get();
        // dd($relatedtags);


        // $related_services = Services::whereHas('tags', function ($query ) use ($service) {
        //     $query->where('service_id', $service->id);
        // })->get();
        // dd($related_services);

        $data= array(
          'service' => $service,
          'relatedtags'     => $relatedtags,

      );
      return view('site.pages.servicedetails')->with($data);

    }
    public function servicecheckout($slug){
        $service = Services::where('slug' ,$slug)->first();

        $data= array(
          'service' => $service,


      );
      return view('site.pages.servicecheckout')->with($data);
    }
    public function branding()
    {
        // $packages = Templatepackages::all();
        $services = Services::all();
        // $demos = Sites::where('site_type', 'demo')->take(6)->get();
        $testimonials = Reviews::where('status', '1')->take(3)->get();

        $data = array(
            // 'demos' => $demos,
            // 'packages' => $packages,
            'services' => $services,
            'testimonials' => $testimonials,

        );
        return view('site.pages.branding')->with($data);
    }
    public function faqs()
    {
        $faqs = Faqs::all();
        $data = array(
            'faqs' => $faqs
        );
        return view('site.pages.faqs')->with($data);
    }
    public function about()
    {

        return view('site.pages.about');
    }
    public function fetch_data(Request $request){

        $parameters= array();
        $keyword=$request->input('keyword');
        $location=$request->input('location');
        $keyword_included=$request->input('keyword_included');
        $keyword_excluded=$request->input('keyword_excluded');
        $title=$request->input('title');
        $company=$request->input('company');
        $page=$request->input('page');
        // $distance=$request->input('distance');
        // $posted_in=$request->input('posted_in');
        // $sort=$request->input('sort_by');


        if((!isset($company))  && (!isset($keyword_included))  && (!isset($keyword_excluded)) ){


            $jobs=DB::table('jobs')->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%')->latest()
            ->paginate(25);
            return view('site.pages.paginate_jobs', compact('jobs'))->render();

            return response()->json(['data' => $jobs]);

        }

        if((isset($company))  && (!isset($keyword_included))  && (!isset($keyword_excluded)) ){


            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
             })
             ->where(function($query)use ($company){
            $query->where('employer','LIKE','%'.$company.'%');
            })->latest()
            ->paginate(25);
            return view('site.pages.paginate_jobs', compact('jobs'))->render();

        }

        if((isset($company))  && (isset($keyword_included))  && (!isset($keyword_excluded))){

                $inc_keywords = preg_split('/\s+/', $keyword_included, -1, PREG_SPLIT_NO_EMPTY);
                $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                    $query->where('job_title','LIKE','%'.$keyword.'%')
                ->where('location','LIKE','%'.$location.'%');
            })
            ->where(function($query)use ($company){
                $query->where('employer','LIKE','%'.$company.'%')
           ;
             })
                ->where(function ($query) use ($inc_keywords) {
            foreach ($inc_keywords as $value) {
              $query->orWhere('job_title', 'like', "%{$value}%");
            }
          })
                ->get();
                return response()->json(['data' => $jobs]);

        }

        if((isset($company))  && (isset($keyword_included))  && (isset($keyword_excluded)) ){

            $inc_keywords = preg_split('/\s+/', $keyword_included, -1, PREG_SPLIT_NO_EMPTY);
            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY);
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
            ->where(function($query)use ($company){
            $query->where('employer','LIKE','%'.$company.'%');
            })
            ->where(function ($query) use ($inc_keywords) {
                foreach ($inc_keywords as $value) {
                $query->orWhere('job_title', 'like', "%{$value}%");
                }
            })
            ->where(function ($query) use ($exc_keywords) {
                foreach ($exc_keywords as $value) {
                $query->orWhere('job_title', 'not like', "%{$value}%");
                }
            })->latest()
            ->paginate(25);
            return view('site.pages.paginate_jobs', compact('jobs'))->render();

        }
        if((!isset($company))  && (isset($keyword_included))  && (isset($keyword_excluded)) ){

            $inc_keywords = preg_split('/\s+/', $keyword_included, -1, PREG_SPLIT_NO_EMPTY);
            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY);
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
            ->where(function ($query) use ($inc_keywords) {
                foreach ($inc_keywords as $value) {
                $query->orWhere('job_title', 'like', "%{$value}%");
                }
            })
            ->where(function ($query) use ($exc_keywords) {
                foreach ($exc_keywords as $value) {
                $query->orWhere('job_title', 'not like', "%{$value}%");
                }
            })->latest()
            ->paginate(25);
            return view('site.pages.paginate_jobs', compact('jobs'))->render();

        }
        if((!isset($company))  && (isset($keyword_included))  && (!isset($keyword_excluded)) ){

            $inc_keywords = preg_split('/\s+/', $keyword_included, -1, PREG_SPLIT_NO_EMPTY);
            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY);
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })

            ->where(function ($query) use ($inc_keywords) {
                foreach ($inc_keywords as $value) {
                $query->orWhere('job_title', 'like', "%{$value}%");
                }
            })->latest()

            ->paginate(25);
            return view('site.pages.paginate_jobs', compact('jobs'))->render();

        }


        if((isset($company))  && (!isset($keyword_included))  && (isset($keyword_excluded)) ){


            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY);
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
            ->where(function($query)use ($company){
            $query->where('employer','LIKE','%'.$company.'%');
            })
            ->where(function ($query) use ($exc_keywords) {
                foreach ($exc_keywords as $value) {
                $query->orWhere('job_title', 'not like', "%{$value}%");
                }
            })->latest()
            ->paginate(25);
            return view('site.pages.paginate_jobs', compact('jobs'))->render();

        }
        if((!isset($company))  && (!isset($keyword_included))  && (isset($keyword_excluded)) ){


            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY);
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
           ->where(function ($query) use ($exc_keywords) {
                foreach ($exc_keywords as $value) {
                $query->orWhere('job_title', 'not like', "%{$value}%");
                }
            })->latest()
            ->paginate(25);
            return view('site.pages.paginate_jobs', compact('jobs'))->render();

        }







    }
    public function fetch_consultants(Request $request){
        $consultants = Consultant::where('active',1)->orderBy('created_at', 'desc')->simplePaginate(10);

        return view('site.pages.paginate_consultants', compact('consultants'))->render();



    }

    public function search_consultants(Request $request)
    {

        $parameters= array();
        $keyword=$request->input('keyword');
        $location=$request->input('location');
        $category_id=$request->input('category');
        $rate = $request->input('rate');

        $min = 0;
            $max = 0;
        if($rate){
            $rates = explode("-",$rate );
            $min = (int)$rates[0];
            $max = (int)$rates[1];
        }




        $page=$request->input('page');


        if(($category_id == 0) && ($location == '')){
        $consultants=Consultant::where('active',1)->orderBy('created_at', 'desc')->Where(function($query)use ($keyword){
                    $query->where('first_name','LIKE','%'.$keyword.'%')
                ->orWhere('last_name','LIKE','%'.$keyword.'%')
            ->orWhere('job_title','LIKE','%'.$keyword.'%');
            })
            ->when($rate > 0, function ($q) use ($min,$max){
                $q->whereBetween('current_salary', [$min, $max]);

            })


            ->simplePaginate(10);
        }

            if(($category_id != 0) && ($location == '')){
                $consultants=Consultant::where('active',1)->orderBy('created_at', 'desc')->Where(function($query)use ($keyword){
                    $query->where('first_name','LIKE','%'.$keyword.'%')
                ->orWhere('last_name','LIKE','%'.$keyword.'%')
            ->orWhere('job_title','LIKE','%'.$keyword.'%');
            })


            ->where(function ($q) use ($category_id){
                $q->where('category_id', '=', $category_id);

            })
            ->when($rate > 0, function ($q) use ($min,$max){
                $q->whereBetween('current_salary', [$min, $max]);

            })


            ->simplePaginate(10);
            }
            if(($category_id == 0) && ($location != '')){
                $consultants=Consultant::where('active',1)->orderBy('created_at', 'desc')->Where(function($query)use ($keyword){
                    $query->where('first_name','LIKE','%'.$keyword.'%')
                ->orWhere('last_name','LIKE','%'.$keyword.'%')
            ->orWhere('job_title','LIKE','%'.$keyword.'%');
            })



            ->where(function ($q) use ($location){
                $q->where('city','LIKE','%'.$location.'%')
                ->orWhere('region','LIKE','%'.$location.'%')
                ->orWhere('country','LIKE','%'.$location.'%');

            })
            ->when($rate > 0, function ($q) use ($min ,$max){
                $q->whereBetween('current_salary', [$min, $max]);

            })


            ->simplePaginate(10);
            }
            if(($category_id != 0) && ($location != '')){
                $consultants=Consultant::where('active',1)->orderBy('created_at', 'desc')->Where(function($query)use ($keyword){
                    $query->where('first_name','LIKE','%'.$keyword.'%')
                ->orWhere('last_name','LIKE','%'.$keyword.'%')
            ->orWhere('job_title','LIKE','%'.$keyword.'%');
            })


            ->where(function ($q) use ($category_id){
                $q->where('category_id', '=', $category_id);

            })
            ->where(function ($q) use ($location){
                $q->where('city','LIKE','%'.$location.'%')
                ->orWhere('region','LIKE','%'.$location.'%')
                ->orWhere('country','LIKE','%'.$location.'%');

            })
            ->when($rate > 0, function ($q) use ($min,$max){
                $q->whereBetween('current_salary', [$min, $max]);

            })


            ->simplePaginate(10);
            }


            return view('site.pages.paginate_consultants', compact('consultants'))->render();





    }
    public function search_consultants_form(Request $request)
    {
        $jobcat = JobCategory::orderBy('name', 'asc')->get();
        $keyword=$request->input('title');
        $consultants=Consultant::where('active',1)->orderBy('created_at', 'desc')->Where(function($query)use ($keyword){
                    $query->where('first_name','LIKE','%'.$keyword.'%')
                    ->orWhere('last_name','LIKE','%'.$keyword.'%')
                    ->orWhere('job_title','LIKE','%'.$keyword.'%');
                    })->simplePaginate(10);

        $data = array(
                'consultants'=>$consultants,
                'categories'=>$jobcat
                );

        return view('site.pages.consultants')->with($data);
    }
    public function search_consultants_by_cat($id)
    {   $category_id = $id;

        $jobcat = JobCategory::orderBy('name', 'asc')->get();

        $consultants=Consultant::where('active',1)->orderBy('created_at', 'desc')
        ->Where(function($query)use ($category_id){
                    $query->where('category_id', '=', $category_id);
                    })->simplePaginate(10);

        $data = array(
                'consultants'=>$consultants,
                'categories'=>$jobcat
                );

        return view('site.pages.consultants')->with($data);
    }


    public function contactpage(){

        return view('site.pages.contact');



    }
    public function contactform(CaptchaValidation $request){


        $contact = new Contactus;
        $contact->user_name =$request->input('user_name');
        $contact->email =$request->input('email');
        $contact->phone =$request->input('phone');
        $contact->message =$request->input('message');
        $contact->save();
        
        $details = [
            'name' => $request->input('user_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'comment'   => $request->input('message')
        ];
        Mail::to('contact@personalsite.com')->send(new ContactSubmit($details));
        return redirect()->route('site.contact')->with('success', 'Message delivered! We will respond you soon.');
        

}
public function reviews_pagination(){

    $reviews = Reviews::where('status', '1')->simplePaginate(6);
    // dd($reviews );
    $data = array(

        'reviews' => $reviews,

    );
    return view('site.pages.reviews_paginate')->with($data)->render();
}
public function reviewsform(Request $request){


    $review = new Reviews;
    $review->name =$request->input('name');
    $review->email =$request->input('email');
    $review->designation =$request->input('designation');
    $review->website =$request->input('web_url');
    $review->linkedin =$request->input('linkedin');
    $review->rating =$request->input('rating');
    $review->review =$request->input('review');

    if($request->hasFile('image')){
        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/reviews', $fileNameToStore);
        $review->profile_pic = $fileNameToStore;
    }

    $review->save();
return redirect()->route('site.reviews')->with('success', 'Review added successfully! It will be live shortly.');


}
public function callBackForm(Request $request){


    $contact = new Contactus;
    $contact->user_name =$request->input('user_name');
    $contact->email =$request->input('email');
    $contact->phone =$request->input('phone');
    $contact->message = 'Call back request';
    $contact->save();
    $details = [
        'name' => $request->input('user_name'),
        'phone' => $request->input('phone')
    ];
    Mail::to('contact@personalsite.com')->send(new CallBack($details));
    return redirect()->route('site.contact')->with('success', 'Message delivered! We will respond you soon.');


}
public function privacypage(){

    return view('site.pages.privacy');



}
public function termspage(){

    return view('site.pages.terms');



}

public function how_it_works_page(){
    $faqs = Faqs::all();
        $data = array(
            'faqs' => $faqs
        );

    return view('site.pages.how_it_works')->with($data);



}
public function likedindcallback(){
}

public function mail_temp(){

    return view('site.pages.mail');




}
public function case_studies_page(){

    return view('site.pages.case_studies');




}
public function employer_redirect(){
    if(Auth::user()->hasRole(['consultant'])){
        Auth::logout();
        return redirect('/register');
    }else{
        abort(403);
    }
}
public function serviceorder(Request $request)
    {
       if(Auth::user() && !Auth::user()->hasRole(['consultant'])){
           abort(403);
       }
      $this->validate($request, [
        'firstname' => ['required', 'string', 'max:255'],
        'lastname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        
    ]);
       
        
        // $initAuth->newAuth() will accept an array of OAuth settings
        $settings = [
            'userName'   => 'personalsite',             // Create a new user
            'password'   => 'Campaign2020*',             // Make it a secure password
        ];

        // Initiate the auth object
        $initAuth = new ApiAuth();
        $auth     = $initAuth->newAuth($settings, 'BasicAuth');

        $apiUrl     = "https://mailserver.personalsite.net/";
        $api        = new MauticApi();
    $user = User::where('email', $request->input('email'))->first();
    $user_firstname = $request->input('firstname');
        $user_lastname = $request->input('lastname');
    if($user == null){
        $user = new User;
        
        $user->name = $user_firstname . " " . $user_lastname;
        $user->email = $request->input('email');
        // $password = str_random(8);
        $password = $user_firstname."@321";
        $user->password = Hash::make($password);
        $user->save();
        $user->assignRole('consultant');
        $contactApi = $api->newApi("contacts", $auth, $apiUrl);
        $data_array = array(
        'firstname' => $request->input('firstname'),
        'lastname'  => $request->input('lastname'),
        'email'     => $request->input('email'),
        'ipAddress' => $_SERVER['REMOTE_ADDR'],
        'user_type' => ucwords('consultant'),
        'overwriteWithBlank' => true,
        );
    }    
    

   
    
             $consultant = new Consultant;
            $consultant->user_id = $user->id;
            $consultant->first_name =$user_firstname;
            $consultant->phone = $request->input('phone');
            $consultant->last_name =$user_lastname;
            $consultant->manual = 0;
            $consultant->active = 0;

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
        $order = new Orders;
        $order->service_id =$request->input('service_id');
        $order->template_id = 0;
        $order->user_id     =$user->id;
        $order->client_id     =$consultant->id;
        $order->status     = 0;
        if($request->hasFile('attachment')){
          $fileNameWithExt = $request->file('attachment')->getClientOriginalName();

          $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('attachment')->getClientOriginalExtension();

          $fileNameToStore = $fileName.'_'.time().'.'.$extension;

          $path = $request->file('attachment')->storeAs('public/attachments/clients/'.$consultant->id, $fileNameToStore);
          // dd($fileNameToStore);
          $order->attachment = $fileNameToStore;
      }
        $order->notes     = $request->input('notes');
        $order->save();
        
        
    
        return view('site.pages.thankyou');

    }
    public function reviews()
    {
        $testimonials = Reviews::where('status', '1')->where('featured', '1')->get();
        $reviews = Reviews::where('status', '1')->simplePaginate(6);

        $data = array(
            'testimonials' => $testimonials,
            'reviews' => $reviews,

        );
        return view('site.pages.reviews')->with($data);
    }

}
