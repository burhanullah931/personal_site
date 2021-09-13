<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{


    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jobs';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'job_title',
        'description',
        'employer',
        'location',
        'created_at',
        'updated_at',
        'salary',
        'category',
        'job_category_id',
        'data_oprator',
        'joblink',
        
        
    ];
    public function job_category()
    {

        return $this->belongsTo('App\JobCategory','job_category_id','id');

    }
    public function users()
    {
        return $this->belongsToMany('App\User' , 'user_jobs' , 'job_id', 'user_id');
    }
}
