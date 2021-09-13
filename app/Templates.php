<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    Protected $table = 'templates';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'name',
        'slug',
        'template_type',
        'template_pages',
        'image',
        
        
    ];
    public function sites()

    {

        return $this->hasMany('App\Sites','template_id','id')->where('site_type', 'site');

    }
    public function pages()

    {

        return $this->hasMany('App\Templatepages','template_id','id');

    }
    public function demo()

    {
       
            return $this->hasOne('App\Sites','template_id','id')->where('site_type', 'demo');
    

    }

    public function orders()

    {

        return $this->hasMany('App\Orders','template_id','id');

    }


    public function template_category()

    {

        return $this->belongsTo('App\Templatecategories');

    }

    
}
