<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    protected $fillable = [
        'user_id', 'seat_number', 'number_of_people' , 'timeStart', 'timeEnd'
    ];

    public $timestamps = false;
    
    public function user(){
        return $this->belongTo('App\User');
    }

}
