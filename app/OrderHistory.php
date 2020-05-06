<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $fillable = [
        'user_id', 'food_id','quantity', 'date'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function food(){
        return $this->hasMany('App\Food');
    }
}
