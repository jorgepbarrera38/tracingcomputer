<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traceability extends Model
{
    protected $fillable = [
        'device_id', 'funcionary_id', 'ubication_id', 'dependence_id', 'observations'
    ];
    public function ubication(){
        return $this->belongsTo('App\Ubication');
    }
    public function funcionary(){
        return $this->belongsTo('App\Funcionary');
    }
    public function dependence(){
        return $this->belongsTo('App\Dependence');
    }
}
