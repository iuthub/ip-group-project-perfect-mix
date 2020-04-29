<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    protected $fillable = [
        'user_id', 'seat' , 'time'
    ];
    
    public function user(){
        return $this->belongTo('App\User');
    }

}
