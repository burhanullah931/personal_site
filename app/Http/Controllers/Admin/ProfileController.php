<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class ProfileController extends Controller
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
        $user=Auth::user();
        $user = User::findOrfail($user->id);
        
        $data = array(
            'user' => $user,
           

        );
        
        return view('admin.profile.edit')->with($data);
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
        $request->validate([
            'oldpassword' => 'nullable|required_with:password|string|min:8',
            'password' => 'nullable|required_with:oldpassword|string|min:8',
            'password_confirmation' => 'nullable|required_with:password|same:password|min:8',
            'profilepic' => 'image|nullable|max:1999'
        ]);
        $user = User::find(auth()->user()->id);
        $user->name = $request->input('firstname');
        if($request->hasFile('profilepic')){
                $fileNameWithExt = $request->file('profilepic')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('profilepic')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('profilepic')->storeAs('public/site/images/users/', $fileNameToStore);
                $user->logo = $fileNameToStore;
            }
        if($request->input('oldpassword')){
            if (!Hash::check($request->input('oldpassword'), $user->password)) {
                return back()->with('error', 'The specified password does not match the database password');
            } else {
                $user->password = Hash::make($request->input('password'));

            }   

        }
        $user->save();
        return redirect(route('profile.edit',$user->id )) ->with('success','Profile Updated successfully');
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
