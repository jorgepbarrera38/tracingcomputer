<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'funcionary_id', 
        'ubication_id', 
        'dependence_id', 
        'brand_id' , //--
        'element_id', //
        'description', //
        'status', //
        'acquisition', //
        'cost', //
        'datebuy',// 
        'initoperation', //
        'usefullife', 
        'serial', 
        'code', 
        'observations'//
    ];
    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    public function funcionary(){
        return $this->belongsTo('App\Funcionary');
    }
    public function ubication(){
        return $this->belongsTo('App\Ubication');
    }
    public function dependence(){
        return $this->belongsTo('App\Dependence');
    }
    public function element(){
        return $this->belongsTo('App\Element');
    }
    public function traceabilities(){
        return $this->hasMany('App\Traceability');
    }
    //Scopes
    public function scopeCodeserial($query, $codeserial){
        $query->where('code', 'LIKE', '%'.$codeserial.'%')->orWhere('serial', 'LIKE', '%'.$codeserial.'%');
    }
    public function scopeUbicationsearch($query, $ubication){
        if($ubication){
            $query->where('ubication_id', $ubication);
        }
    }
    public function scopeDependencesearch($query, $dependence){
        if($dependence){
            $query->where('dependence_id', $dependence);
        }
    }
    public function scopeFuncionarysearch($query, $funcionary){
        if($funcionary){
            $query->where('funcionary_id', $funcionary);
        }
    }
}
