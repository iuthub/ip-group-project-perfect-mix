<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name', 'description', 'type_id' , 'cuisine_id' , 'price', 'photo_path'
    ];

    public $timestamps = false;

    public function orderprocess(){
        return $this->belongsTo('App\OrderProcess');
    }

    public function orderhistory(){
        return $this->belongsTo('App\OrderHistory');
    }

    public function cuisine(){
    	return $this->belongsTo('App\Cuisine');
    }

    public function type(){
    	return $this->belongsTo('App\FoodType');
    }
}
