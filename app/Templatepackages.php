<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templatepackages extends Model
{
    Protected $table = 'template_packages';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'template_category_id',
        'title',
        'sub_title',
        'slug',
        'price',
        'package_type',
        'package_duration',
        'featured',
        'status',
        
        
        
        
        
    ];
    
    public function template_category()

    {

        return $this->belongsTo('App\Templatecategories');

    }
    public function meta()

    {

        return $this->hasMany('App\Templatepackagemeta','template_package_id','id');

    }
    
}
