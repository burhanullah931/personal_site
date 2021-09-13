<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recruiter';
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
        'expected_salary',
        'facebook',
        'twitter',
        'linkedin',
        'google_plus',
        'vimeo',
        'youtube',
        'created_at',
        'updated_at'
        
        
    ];
    public function user()

    {

        return $this->belongsTo('App\User');

    }
}
