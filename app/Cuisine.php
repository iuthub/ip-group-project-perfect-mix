<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    protected $fillable = [
        'name', 'photo_path'
    ];

    public $timestamps=false;

    public function food(){
        return $this->hasMany('App\Food');
    }
}
