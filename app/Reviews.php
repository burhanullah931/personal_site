<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    Protected $table = 'reviews';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'designation',
        'linkedin',
        'website',
        'review',
        'rating',
        'profile_pic',
        'status',
        
        
        
        
    ];
}
