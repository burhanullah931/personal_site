<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }
}
