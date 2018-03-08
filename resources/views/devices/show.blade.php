@extends('layouts.main')
@section('title', 'Ver dispositivo')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ substr($device->description, 0, 61) }} <div class="pull-right"><a href="{{ route('devices.edit', $device->id) }}" class="btn btn-success btn-sm">Editar</a> <a class="btn btn-danger btn-sm" onclick="document.getElementById('form-delete').submit()">Dar de baja</a>
                <form action="{{ route('devices.destroy', $device->id) }}" method="post" id="form-delete" style="display: none">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit">Eliminar</button>
                </form>
                </div></div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <label for="">Elemento: </label>
                        {{ $device->element->name }} <br>
                        <label for="">Descripción: </label>
                        <p class="text-justify">{{ $device->description }}</p>
                        <label for="">Marca</label>
                        {{ $device->brand->name }} <br>
                        <label for="">Ubicación: </label>
                        {{ $device->ubication->name }} <br>
                        <label for="">Dependencia: </label>
                        {{ $device->dependence->name }} <br>
                        <label for="">Funcionario</label>
                        {{ $device->funcionary->name." ". $device->funcionary->lastname }} <br>
                        <label for="">Placa interna: </label>
                        {{ $device->code }} <br>
                        <label for="">Número de serial: </label>
                        {{ $device->serial }} <br>
                        <label for="">Observaciónes: </label>
                        {{ $device->observations }} <br>
                        <label for="">Estado: </label>
                        {{ $device->status }} <br>
                    </div>
                    <div class="col-md-6">
                        <label for="">Forma de adquisición</label>
                        {{ $device->acquisition }} <br>
                        <label for="">Costo de adquisición</label>
                        ${{ number_format($device->cost) }} <br>
                        <label for="">Fecha de compra</label>
                        {{ $device->datebuy }} <br>
                        <label for="">Inicio de operación</label>
                        {{ $device->initoperation }} <br>
                        <label for="">Vida útil</label>
                        {{ $device->usefullife }} años <br>
                    </div>
                    <div class="col-md-12"><center>
                        <a target="_blank" href="{{ route('report.life', $device->id) }}" class="btn btn-primary btn-sm">Hoja de vida</a>
                        <a target="_blank" href="{{ route('report.mant', ['id'=>$device->id, 'type'=>'Mantenimiento Preventivo']) }}" class="btn btn-primary btn-sm">Reporte de mantenimiento preventivo</a>
                        <a target="_blank" href="{{ route('report.mant', ['id'=>$device->id, 'type'=>'Mantenimiento Correctivo']) }}" class="btn btn-primary btn-sm">Reporte de mantenimiento correctivo</a>                      
                        </center>
                    </div>
                    <div class="col-md-12">
                            <hr/>
                            <center><h5><label for="">Movimientos</label> <a href="{{ route('traceabilities.create', $device->id) }}" class="btn btn-default btn-sm">Registrar movimiento</a></h5></center>
                            <table class="table table-hover">
                                <thead>
                                    <th>Fecha de movimiento</th>
                                    <th>Ubicación</th>
                                    <th>Funcionario</th>
                                    <th>Dependencia</th>
                                    <th>Observación</th>
                                </thead>
                                <tbody>
                                    @foreach ($device->traceabilities()->orderBy('id', 'DESC')->get() as $traceability)
                                       <tr>
                                           <td>{{ $traceability->created_at }}</td>
                                           <td>{{ $traceability->ubication->name }}</td>
                                           <td>{{ $traceability->funcionary->name ." ". $traceability->funcionary->lastname }}</td>
                                           <td>{{ $traceability->dependence->name }}</td>
                                           <td>{{ $traceability->observations }}</td>
                                       </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection    