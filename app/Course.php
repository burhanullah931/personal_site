<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function lectures()
    {
        return $this->hasMany('App\Lecture');
    }
    public function orderCourses()
    {
        return $this->hasMany('App\OrderCourse');
    }
}
