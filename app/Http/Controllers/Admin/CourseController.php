<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Lecture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;

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

        foreach ($request->lect_title as $key => $lec_title) {
            $lecture = new Lecture;
            $lecture->title = $lec_title;
            $lecture->description = $request->lect_description[$key];
            $lecture->video_link = $request->lect_video_link[$key];
            $lecture->course_id = $course->id;
            $imageName = null;
            if($request->hasFile('lect_banner')){
                $imageName = 'lecture-' . uniqid() . '.' .$request->lect_banner[$key]->getClientOriginalName();
            
                $request->lect_banner[$key]->move('site/images/courses', $imageName);
            }
            $lecture->banner = $imageName;
            $lecture->save();
        }

        return redirect()->route('admin.courses')->with('success', 'Course Successfully created');
    }
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.edit_course', compact('course'));
    }
    public function update(CourseRequest $request)
    {
        // dd($request);
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

        foreach ($request->lect_id as $key => $id) {
            $lecture = Lecture::findOrFail($id);
            $banner = $lecture->banner;
            if($request->hasFile('lect_banner')){
                $imageName = 'lecture-' . uniqid() . '.' .$request->lect_banner[$key]->getClientOriginalName();
            
                $request->lect_banner[$key]->move('site/images/courses', $imageName);
                $banner = $imageName;
            }
            $lecture->update([
                'title' => $request->lect_title[$key],
                'description' => $request->lect_description[$key],
                'video_link' => $request->lect_video_link[$key],
                'banner' => $banner
            ]);
        }

        if($request->new_title){
            foreach ($request->new_title as $key => $newTitle) {
                $new_banner = null;
               $new_lect = new Lecture;
               $new_lect->title = $request->new_title[$key];
               $new_lect->description = $request->new_description[$key];
               $new_lect->video_link = $request->new_video_link[$key];
               $new_lect->course_id = $course->id;
               if($request->hasFile('new_banner')){
                    $imageName = 'lecture-' . uniqid() . '.' .$request->new_banner[$key]->getClientOriginalName();
                
                    $request->new_banner[$key]->move('site/images/courses', $imageName);
                    $new_lect->banner = $imageName;
                }
                $new_lect->save();
            }
        }


        return redirect()->route('admin.courses')->with('success', 'Course Successfully updated');

    }
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        try {
            $course->delete();
            return redirect()->route('admin.courses')->with('success', 'Course Successfully deleted');

        } catch (\Throwable $th) {
            return redirect()->route('admin.courses')->with('error', 'You can not delete this course');
        }
    }

    public function lectureDestroy($id)
    {
        $lecture = Lecture::findOrFail($id);
        
       try {
        unlink(public_path('site/images/courses/'.$lecture->banner));
       } catch (\Throwable $th) {
           //throw $th;
       }
       $lecture->delete();
       return redirect()->back()->with('error', 'Lecture Successfully deleted');

    }
    public function lectures($id)
    {
        $lectures = Lecture::where('course_id', $id)->orderBy('created_at', 'DESC')->get();
        $course = Course::findOrFail($id);
        return view('admin.course.lectures', compact('lectures', 'course'));
    }
    public function lectureUpdate(Request $request)
    {
        // dd($request);
        $lecture = Lecture::findOrFail($request->lect_id);
        $banner = $lecture->banner;
        if($request->hasFile('banner')){
            try {
                unlink(public_path('site/images/courses/'.$lecture->banner));
            } catch (\Throwable $th) {
                //throw $th;
            }
            $imageName = 'lecture-' . uniqid() . '.' .$request->banner->getClientOriginalName();
                
            $request->banner->move('site/images/courses', $imageName);
            $banner = $imageName;
        }
        $lecture->update([
            'title' => $request->title,
            'description' => $request->description,
            'video_link' => $request->video_link,
            'banner' => $banner
        ]);
        return redirect()->back()->with('success', 'Lecture successfully updated');
    }
    public function lectureStore(Request $request)
    {
        // dd($request);
        $lecture = new Lecture;
        $lecture->title = $request->title;
        $lecture->description = $request->description;
        $lecture->video_link = $request->video_link;
        $lecture->course_id = $request->course_id;

        if($request->hasFile('banner')){
            $imageName = 'lecture-' . uniqid() . '.' .$request->banner->getClientOriginalName();
        
            $request->banner->move('site/images/courses', $imageName);
            $lecture->banner = $imageName;
        }
        $lecture->save();
        return redirect()->back()->with('success', 'Lecture successfully created');
    }
}
