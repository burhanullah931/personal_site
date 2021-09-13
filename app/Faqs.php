<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    Protected $table = 'faqs';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'question',
        'answer',
        'type',
        'status',
        
    ];
}
