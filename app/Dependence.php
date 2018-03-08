<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependence extends Model
{
    protected $fillable = [ 'name' ];
    //Scopes
    public function scopeDependencesearch($query, $dependence){
        $query->where('name', 'LIKE', '%'.$dependence.'%');
    }
}

