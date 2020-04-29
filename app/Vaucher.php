<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaucher extends Model
{
    protected $fillable = [
        'coupon_type', 'value'
    ];
    
    public function user(){
        return $this->hasMany('App\User');
    }

}
