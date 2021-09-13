<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    Protected $table = 'orders';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'client_id',
        'status',
        'notes',
        
    ];

    // public function payment()

    // {

    //     return $this->hasOne('App\Orderpayments','order_id','id');
    // }
    
    // public function template()

    // {

    //     return $this->belongsTo('App\Templates');
    // }

    public function client()

    {

        return $this->belongsTo('App\Consultant', 'client_id');
    }
    public function user()

    {

        return $this->belongsTo('App\User');
    }
    public function service()

    {

        return $this->belongsTo('App\Services');
    }
}
