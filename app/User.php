<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    protected $fillable = [
        'full_name', 'email', 'phone_number' , 'password'
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

    public function tables(){
        return $this->hasMany('App\Tables');
    }

    public function order_process(){
        return $this->belongsTo('App\OrderProcess');
    }

    public function order_history(){
        return $this->belongsTo('App\OrderHistory');
    }

    public function vaucher(){
        return $this->belongsTo('App\Vaucher');
    }

}
