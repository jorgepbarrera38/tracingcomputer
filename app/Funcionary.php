<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionary extends Model
{
    protected $fillable = [
        'identification', 'name', 'lastname'
    ];
    public function devices(){
        return $this->hasMany('App\Device');
    }
    public function scopeNames($query, $search){
        $query->where('name', 'LIKE', '%'.$search.'%')->orWhere('lastname', 'LIKE', '%'.$search.'%');
    }
}
