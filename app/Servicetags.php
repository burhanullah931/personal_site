<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicetags extends Model
{
    Protected $table = 'service_tags';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'service_id',
        'name',
        'title',
        
        
        
    ];

    
    public function service()

    {

        return $this->belongsTo('App\Services');

    }
}
