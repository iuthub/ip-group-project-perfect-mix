<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function food(){
    	return $this->hasMany('App\Food');
    }
}
