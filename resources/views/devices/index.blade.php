@extends('layouts.main')
@section('title', 'Dispositivos')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dispositivos - Total: {{ $devicesCount }}
                    <a href="{{ route('devices.create') }}" class="btn btn-success btn-sm pull-right">Nuevo</a>
                </div>
                <div class="panel-body">
                    @include('devices.partials.buscar')
                    <hr> 
                    @include('partials.messages')
                    @if( $devices->total() > 0 )
                    Total de resultados: {{ $devices->total() }}
                    {{ session(['urlPrevious'=> request()->fullurl()]) }}
                    <table class="table table-hover table-condensed">
                        <thead>
                            <th>Mant</th>
                            <th>Elemento</th>
                            <th>Descripción</th>
                            <th>Placa interna</th>
                            <th>Serial</th>
                            <th>Ubicación</th>
                            <th>Dependencia</th>
                            <th>Funcionario</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach ($devices as $device)
                                <tr>
                                    <td>{{ $device->mant }}</td>
                                    <td>{{ $device->element->name }}</td>
                                    <td><p class="text-justify">{{ substr($device->description, 0, 92) }}</p></td>
                                    <td>{{ $device->code }}</td>
                                    <td>{{ $device->serial }}</td>
                                    <td>{{ $device->ubication->name }}</td>
                                    <td>{{ $device->dependence->name }}</td>
                                    <td>{{ $device->funcionary->name }} {{ $device->funcionary->lastname }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('devices.show', $device->id) }}">Ver</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><center>
                    @else
                        No hay coincidencias...
                    @endif
                    {{ $devices
                        ->appends([
                            'ubication'=>request('ubication'), 
                            'dependence'=>request('dependence'), 
                            'funcionary'=>request('funcionary'), 
                            'codeserial'=>request('codeserial')
                        ])->links() }}</center>
                </div>
            </div>
        </div>
    </div>
@endsection                   