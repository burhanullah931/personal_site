<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    Protected $table = 'contact_us';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'user_name',
        'email',
        'phone',
        'type',
        'message',
        ];
}
