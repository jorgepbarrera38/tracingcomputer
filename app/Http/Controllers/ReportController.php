<?php

namespace App\Http\Controllers;

use App\Ubication;
use App\Device;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $ubications = Ubication::all();
        $devices = Device::where('state', 'active')->get();
        return view('reports.index', compact('ubications', 'devices'));
    }
    public function all(){
        if(request('ubication')){
            $devices = \App\Device::where('ubication_id', request('ubication'))->where('state', 'active')->get(); 
        }else{
            $devices = \App\Device::orderBy('ubication_id')->where('state', 'active')->get(); 
        }
        $pdf = \PDF::loadView('reports.all', ['devices'=>$devices]);
        return $pdf->stream();
    }
    public function life($id){
        $device = \App\Device::where('id', $id)->where('state', 'active')->first();
        if($device){
            $pdf = \PDF::loadView('reports.lifepc', ['device'=>$device]);
            return $pdf->stream();
        }else{
            abort(404);
        }
    }
    public function mant($id, $type){
        $device = \App\Device::where('id', $id)->where('state', 'active')->first();
        if($device){
            $pdf = \PDF::loadView('reports.mant', ['device'=>$device, 'typeMant'=>$type]);
            return $pdf->stream($device->id.".pdf");
        }else{
            abort(404);
        }
        
    }
}

