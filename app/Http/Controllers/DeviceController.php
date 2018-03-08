<?php

namespace App\Http\Controllers;

use App\Device;
use App\Funcionary;
use App\Ubication;
use App\Dependence;
use App\Element;
use App\Brand;
use App\Traceability;
use App\Http\Requests\DeviceFormRequest;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Obteniendo datos de búsqueda
        $ubicationsearch = $request['ubication'];
        $dependencesearch = $request['dependence'];
        $funcionarysearch = $request['funcionary'];
        $codeserialsearch = $request['codeserial'];

        //Llamando todos los datos
        $ubications = Ubication::all();
        $dependences = Dependence::all();
        $funcionaries = Funcionary::all();
        $devicesCount = Device::where('state', 'active')->count();

        $devices = Device::ubicationsearch($ubicationsearch)
                   ->dependencesearch($dependencesearch)
                   ->funcionarysearch($funcionarysearch)
                   ->codeserial($codeserialsearch)
                   ->orderBy('ubication_id', 'asc')
                   ->orderBy('dependence_id', 'desc')
                   ->where('state', 'active')
                   ->paginate(7);    

        return view('devices.index', ['devices'=>$devices, 'ubicationsearch'=>$ubicationsearch, 'dependencesearch'=>$dependencesearch, 'funcionarysearch'=>$funcionarysearch,'codeserialsearch'=>$codeserialsearch,'ubications'=>$ubications, 'dependences'=>$dependences, 'funcionaries'=>$funcionaries, 'devicesCount'=>$devicesCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $funcionaries = Funcionary::all();
        $ubications = Ubication::all();
        $dependences = Dependence::all();
        $elements = Element::all();
        $brands = Brand::all();
        return view('devices.create', compact('funcionaries', 'ubications', 'dependences', 'elements', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeviceFormRequest $request)
    {
        //Almacenando el dispositivo nuevo
        $device = Device::create($request->all());
        //Creando la ubicación inicial para la trazabilidad
        $traceablity = new Traceability;
        $traceablity->device_id = $device->id;
        $traceablity->funcionary_id = $request->input('funcionary_id');
        $traceablity->ubication_id = $request->input('ubication_id');
        $traceablity->dependence_id = $request->input('dependence_id');
        $traceablity->observations = 'No hay observaciónes';
        $traceablity->save();
        return redirect()->back()->with('info', 'Dispositivo creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        if ($device->state === 'active') {
            return view('devices.show', compact('device'));
        }else{
            abort(404);
        }        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        if($device->state === 'active'){
            $brands = \App\Brand::all();
            $elements = \App\Element::all();
            return view('devices.edit', compact('device', 'brands', 'elements'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $device =Device::where('id', $device->id)->where('state', 'active')->first();
        if($device){
            $request->validate([
                'element_id' => 'required',
                'brand_id' => 'required',
                'serial' => 'required|string|unique:devices,code,'.$device->id,
                'code' => 'required|string|unique:devices,code,'.$device->id,
                'status' => 'required',
                'description' => 'required|string',
                'observations' => 'max:100',
                'acquisition'=> 'required',
                'cost'=> 'required|numeric',
                'datebuy'=> 'required|date',
                'initoperation'=> 'required|date',
                'usefullife' => 'required|numeric',
            ]);
            $device->update($request->all());
            return redirect()
                   ->route('devices.index')
                   ->with('info', 'Dispositivo actualizado correctamente, serial: '.$request->input('serial').' placa: '. $request->input('code'));
        }else{
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->state = 'inactive';
        $device->save();
        return redirect()->route('devices.index')->with('info', 'El dispositivo fue dado de baja, Serial: '.$device->serial.'');
    }
    public function traceabilitiescreate($id){
        $device =Device::where('id', $id)->where('state', 'active')->first();
        if($device){
            $funcionaries = Funcionary::all();
            $ubications = Ubication::all();
            $dependences = Dependence::all();
            return view('devices.traceabilities.create', compact('device', 'funcionaries', 'ubications', 'dependences'));
        }else{
            abort(404);
        }
    }
    public function traceabilitiesstore(Request $request){
        $device = Device::where('id', $request->input('device_id'))->where('state', 'active')->first();
        if($device){
            Traceability::create($request->all());
            $device = Device::findOrFail($request->input('device_id'));
            $device->funcionary_id = $request->input('funcionary_id');
            $device->ubication_id = $request->input('ubication_id');
            $device->dependence_id = $request->input('dependence_id');
            $device->save();
            return redirect()->route('devices.index')->with('info', 'Movimiento registrado');
        }else{
            abort(404);
        }
    }
}


