<?php

namespace App\Http\Controllers\Recommended;

use App\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecommendedJobController extends Controller
{
    public function index()
    {
        $industry = auth()->user()->consultant->industry;
        $jobs = Jobs::where('job_category_id', $industry)->simplePaginate(10);
        
        return view('admin.recommendedJobs.index', compact('jobs'));
    }
}
