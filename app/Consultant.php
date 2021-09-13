<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{


    
/**
     * Get the skills for the user.
     */

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'consultant';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'slug',
        'organization',
        'hourly_rate',
        'phone',
        'industry',
        'job_title',
        'summary',
        'logo',
        'country',
        'region',
        'city',
        'postcode',
        'full_address',
        'experience',
        'age',
        'gender',
        'current_salary',
        'compensation',
        'expected_salary',
        'rate',
        'website',
        'facebook',
        'twitter',
        'linkedin',
        'website',
        'vimeo',
        'youtube',
        'created_at',
        'updated_at',
        'manual',
        'active',
        'category_id'
        
        
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function job_category()

    {

        return $this->belongsTo('App\JobCategory','category_id','id');

    }
}
