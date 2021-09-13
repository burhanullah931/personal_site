<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataoperator extends Model
{


    
/**
     * Get the skills for the user.
     */

  
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dataoperators';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'data_name',
        'created_at',
        
        
    ];
    public function user()

    {

        return $this->belongsTo('App\User');

    }
   
}
