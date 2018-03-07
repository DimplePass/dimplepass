<?php

namespace App;

use App\Mail\ResetPassword;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Get and Set Phone Fields as presentable and numbers only
    public function getPhoneAttribute($value) 
    {
        return "(".substr($value, 0, 3).") ".substr($value, 3, 3)."-".substr($value,6);
    }
    public function setPhoneAttribute($value) 
    {
        $this->attributes['phone'] = preg_replace('/[^0-9]/i', '', trim($value));
    }
    


    // Functions

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
        // \Mail::to(request()->email)->send(new ResetPassword($token));
    }

}
