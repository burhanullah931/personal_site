<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faqs;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:superadmin']); 
    }
    public function index()
    {
        $faqs = Faqs::all();
        $data = array(
            'faqs' => $faqs
        );
        
        return view('admin.faqs.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq            =   new Faqs;
        $faq->question  =   $request->input('question');
        $faq->answer    =   $request->input('answer');
        $faq->type      =   $request->input('type');
        $faq->status    =   1;
        $faq->save();
        return redirect()->route('faqs.index')->with('success', 'FAQ added successfully.');
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
        $faq = Faqs::findOrFail($id);

        $data = array(
            'faq' => $faq
        );
        
        return view('admin.faqs.edit')->with($data);
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
        $faq            =   Faqs::findOrFail($id);
        $faq->question  =   $request->input('question');
        $faq->answer    =   $request->input('answer');
        $faq->type      =   $request->input('type');
        $faq->status    =   1;
        $faq->save();
        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = Faqs::find($id);
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
