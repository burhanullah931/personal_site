<?php

namespace App\Http\Controllers\Saved;

use App\UserJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SavedJobController extends Controller
{
    public function savedJob($id)
    {
        $check = UserJob::where(['user_id' => auth()->user()->id , 'job_id' => $id])->first();
        if($check){
            $del = UserJob::where(['user_id' => auth()->user()->id , 'job_id' => $id])->first();
            $del->delete();
        }
        else{
            $savedJob = new UserJob();
            $savedJob->user_id = auth()->user()->id;
            $savedJob->job_id = $id;
            $savedJob->save();
        }
        
        
        return redirect()->back();
    }
}
