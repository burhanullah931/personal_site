<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->simplePaginate(12);
        return view('courses.index', compact('courses'));
    }
    public function stripe($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.stripe', compact('course'));
    }
}
