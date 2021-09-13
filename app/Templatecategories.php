<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templatecategories extends Model
{
    Protected $table = 'template_categories';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'name',
        'slug',
 
    ];
    
    public function templates()

    {

        return $this->hasMany('App\Templates','template_category_id','id');

    }
    public function template_package()

    {

        return $this->hasOne('App\Templatepackages','template_category_id','id');

    }
}
