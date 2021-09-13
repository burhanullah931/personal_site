<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use App\Notifications\MailResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','provider_id','provider','logo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function consultant()
    {

        return $this->hasOne('App\Consultant','user_id','id');

    }
    public function recruiter()

    {

        return $this->hasOne('App\Recruiter','user_id','id');

    }
    public function dataop()
    {
        return $this->hasOne('App\Dataoperator','user_id','id');
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordNotification($token));
    }
   public function savedjobs()
   {
       return $this->belongsToMany('App\Jobs' , 'user_jobs' , 'user_id', 'job_id');
   }
   
}
