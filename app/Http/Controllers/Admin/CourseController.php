<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();
        return view ('admin.course.index', compact('courses'));
    }
    public function create()
    {
        return view('admin.course.create_course');
    }
    public function store(CourseRequest $request)
    {
        // dd($request);
        $course = new Course;
        $course->title = $request->title;
        $course->author = $request->author;
        $course->description = $request->description;
        $course->video_link = $request->video_link;
        $course->price = $request->price;
        $course->sale_price = $request->sale_price;
        $course->status = $request->status;

        $course->save();

        return redirect()->route('admin.courses')->with('success', 'Course Successfully created');
    }
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.edit_course', compact('course'));
    }
    public function update(CourseRequest $request)
    {
        $course = Course::findOrFail($request->course_id);
        $course->update([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'video_link' => $request->video_link,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.courses')->with('success', 'Course Successfully updated');

    }
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('admin.courses')->with('error', 'Course Successfully deleted');
    }
}
