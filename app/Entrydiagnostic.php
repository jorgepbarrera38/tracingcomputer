<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrydiagnostic extends Model
{
    public function device(){
        return $this->belongsTo('App\Device');
    }
}
