<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    Protected $table = 'services';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'price',
        'description',
        'image',
        'status',
        
        
        
    ];

    
    public function tags()

    {

        return $this->hasMany('App\Servicetags','service_id','id');

    }
    
}
