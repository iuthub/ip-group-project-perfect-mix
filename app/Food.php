<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name', 'description', 'type_id' , 'cuisine_id' , 'price', 'photo_path'
    ];

    public $timestamps = false;

    public function order_process(){
        return $this->belongsTo('App\OrderProcess');
    }

    public function order_history(){
        return $this->belongsTo('App\OrderHistory');
    }

    public function cuisine(){
    	return $this->belongsTo('App\Cuisine');
    }

    public function type(){
    	return $this->belongsTo('App\FoodType');
    }
}
