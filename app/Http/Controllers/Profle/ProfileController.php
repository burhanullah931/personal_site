<?php

namespace App\Http\Controllers\Profle;

use App\Consultant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profile($slug)
    {
        // dd($slug);
        $consultant = Consultant::where('slug', $slug)->first();
        return view('site.pages.consultant_profile', compact('consultant'));
    }
}
