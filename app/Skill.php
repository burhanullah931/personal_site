<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    
    /**
     * Get the user that owns the skill.
     */
    public function consultant()
    {
        return $this->belongsTo(consultant::class);
    }
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skills';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'title',
        'created_at',
        'updated_at'
        
        
    ];
}
