<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use DB;
class OpportunitiesController extends Controller
{
    
     public function jobajax(Request $request)
    {
        // dd("Major");
        
        $parameters= array();
        $keyword=$request->input('keyword');
        $location=$request->input('location');
        $keyword_included=$request->input('keyword_included');
        $keyword_excluded=$request->input('keyword_excluded');
        $title=$request->input('title');
        $company=$request->input('company');
        $page=$request->input('page');
        // $distance=$request->input('distance');
        $posted_in=$request->input('posted_in');
        // $sort=$request->input('sort_by');
       
       
        if((!isset($company))  && (!isset($keyword_included))  && (!isset($keyword_excluded)) ){

            
                $date = \Carbon\Carbon::today()->subDays($posted_in);
                $jobs=DB::table('jobs')->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%')
            ->when($posted_in > 0, function ($q) use ($date){
                $q->where('created_at', '>=', $date);
                 
            })->latest()

            ->paginate(25);
            
            
            return view('site.pages.paginate_jobs', compact('jobs'))->render();

           

        }

        if((isset($company))  && (!isset($keyword_included))  && (!isset($keyword_excluded)) ){

           
                $date = \Carbon\Carbon::today()->subDays($posted_in);
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location,$date){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');

             })
             ->when($posted_in > 0, function ($q) use ($date){
                $q->where('created_at', '>=', $date);
                 
            })
             ->where(function($query)use ($company){
            $query->where('employer','LIKE','%'.$company.'%');
            })->latest()
            
            ->paginate(25);
            
            return view('site.pages.paginate_jobs', compact('jobs'))->render();
    
        }

        if((isset($company))  && (isset($keyword_included))  && (!isset($keyword_excluded))){
            $date = \Carbon\Carbon::today()->subDays($posted_in);
                $inc_keywords = preg_split('/\s+/', $keyword_included, -1, PREG_SPLIT_NO_EMPTY); 
                $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                    $query->where('job_title','LIKE','%'.$keyword.'%')
                ->where('location','LIKE','%'.$location.'%');
            })
            ->where(function($query)use ($company){
                $query->where('employer','LIKE','%'.$company.'%')
           ;
             })
             ->when($posted_in > 0, function ($q) use ($date){
                $q->where('created_at', '>=', $date);
                 
            })
                ->where(function ($query) use ($inc_keywords) {
            foreach ($inc_keywords as $value) {
              $query->orWhere('job_title', 'like', "%{$value}%");
            }
          })->latest()

          ->paginate(25);
          return view('site.pages.paginate_jobs', compact('jobs'))->render();

        
        }

        if((isset($company))  && (isset($keyword_included))  && (isset($keyword_excluded)) ){
            $date = \Carbon\Carbon::today()->subDays($posted_in);
            $inc_keywords = preg_split('/\s+/', $keyword_included, -1, PREG_SPLIT_NO_EMPTY); 
            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY); 
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
            ->where(function($query)use ($company){
            $query->where('employer','LIKE','%'.$company.'%');
            })
            ->when($posted_in > 0, function ($q) use ($date){
                $q->where('created_at', '>=', $date);
                 
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
            $date = \Carbon\Carbon::today()->subDays($posted_in);
            $inc_keywords = preg_split('/\s+/', $keyword_included, -1, PREG_SPLIT_NO_EMPTY); 
            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY); 
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
            ->when($posted_in > 0, function ($q) use ($date){
                $q->where('created_at', '>=', $date);
                 
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
            $date = \Carbon\Carbon::today()->subDays($posted_in);
            $inc_keywords = preg_split('/\s+/', $keyword_included, -1, PREG_SPLIT_NO_EMPTY); 
            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY); 
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
            ->when($posted_in > 0, function ($q) use ($date){
                $q->where('created_at', '>=', $date);
                 
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

            $date = \Carbon\Carbon::today()->subDays($posted_in);
            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY); 
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
            ->when($posted_in > 0, function ($q) use ($date){
                $q->where('created_at', '>=', $date);
                 
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

            $date = \Carbon\Carbon::today()->subDays($posted_in);
            $exc_keywords = preg_split('/\s+/', $keyword_excluded, -1, PREG_SPLIT_NO_EMPTY); 
            $jobs=DB::table('jobs')->where(function($query)use ($keyword, $location){
                $query->where('job_title','LIKE','%'.$keyword.'%')
            ->where('location','LIKE','%'.$location.'%');
            })
            ->when($posted_in > 0, function ($q) use ($date){
                $q->where('created_at', '>=', $date);
                 
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
    public function singlejobshow($link, $slug){

        // $client = new Client();
        // $crawler = $client->request('GET', 'https://www.linkup.com/details/936ebd6df3761d15c6a60f92442ad3a0?embedded-search=1835d71a372632e562a7775d277c5731s');
        // dd($crawler);

        echo $link;
        echo $slug;


   
    }

   
}
