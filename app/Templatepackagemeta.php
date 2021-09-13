<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templatepackagemeta extends Model
{
    Protected $table = 'template_package_meta';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'template_package_id',
        'description',
        'status',
        
        
        
        
    ];
    
    public function packages()

    {

        return $this->belongsTo('App\Templatepackages');

    }
}
