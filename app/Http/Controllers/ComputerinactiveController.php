<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class ComputerinactiveController extends Controller
{
    public function index(){
    	$devices = Device::where('state', 'inactive')->get();
    	return view('computerinactives.index', compact('devices'));
    }
    public function show($id){
    	$device = Device::where('id', $id)->where('state', 'inactive')->first();
    	return view('computerinactives.show', compact('device'));
    }
}
