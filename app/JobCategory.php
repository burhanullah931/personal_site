<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{

    
    /**
     * Get the job that owns the category.
     */
    
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_categories';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
        
        
    ];
    public function jobs()
    {
        return $this->hasMany('App\Jobs','job_category_id','id');
    }
    public function consultants()
    {
        return $this->hasMany('App\Consultant','category_id','id');
    }
}
