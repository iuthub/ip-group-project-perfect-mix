<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProtcess extends Model
{
	protected $fillable = [
        'user_id', 'food_id', 'date'
    ];
    
    public function user(){
        return $this->hasMany('App\User');
    }

    public function food(){
        return $this->hasMany('App\Food');
    }
}
