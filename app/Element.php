<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $fillable = [
        'name'
    ];
    public function devices(){
        return $this->hasMany('App\Device');
    }
}
