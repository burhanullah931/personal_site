<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use App\Servicetags;
use Illuminate\Support\Str;


class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Services::all();
        $data= array(
            'services' => $services,

        );
        return view('admin.services.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Services;
        $tags= $request->input('service_tag');
        $service->title  = $request->input('title');
        $service->sub_title  = $request->input('sub_title');
        $description  = $request->input('description');
        $service->description = $description;
        $service->price  = $request->input('price');
        $name = Str::slug($request->input('title'));
        $service_exist = services::where('slug', $name)->first();
        if ($service_exist) {
            $last_record = services::find(\DB::table('services')->max('id'));
            $incremented_id = $last_record->id + 1;
            $slug = $name . '-' . $incremented_id;
        } else {
            $slug = $name;
        }
        $service->slug  = $slug;

        $service->image = $request->input('service_image');
        
        
        $service->save();
        foreach($tags as $tag){
       
            $servicetag = new Servicetags;
            $servicetag->service_id= $service->id;
            $servicetag->name=$tag;
            $servicetag->save();

           }
        return redirect()->route('services.index')->with('success', 'Service added successfully.');
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
        $service= Services::findorfail($id);
        $data= array(
            'service' => $service,

        );
        return view('admin.services.edit')->with($data);
        
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
        $service= Services::findorfail($id);
        $tags= $request->input('service_tag');
        $service->title  = $request->input('title'); 
        $description  = $request->input('description');
        $service->description = $description;
        $service->price  = $request->input('price');
        $name = Str::slug($request->input('title'));
        $service_exist = services::where('slug', $name)->first();
        if ($service_exist) {
            $last_record = services::find(\DB::table('services')->max('id'));
            $incremented_id = $last_record->id + 1;
            $slug = $name . '-' . $incremented_id;
        } else {
            $slug = $name;
        }
        $service->slug  = $slug;

        $service->image = $request->input('service_image');
        
        
        $service->save();
        $s_tag = Servicetags::where('service_id',$id);
        $s_tag->delete();
        foreach($tags as $tag){
       
            $servicetag = new Servicetags;
            $servicetag->service_id= $service->id;
            $servicetag->name=$tag;
            $servicetag->save();

           }
        return redirect()->route('services.index')->with('success', 'Service added successfully.');
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
