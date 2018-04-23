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
                    <div class="table-responsive">
                            <table class="table table-hover table-condensed">
                                <thead>
                                    <th>Mant</th>
                                    <th>Elemento</th>
                                    
                                    <th>Placa interna</th>
                                    <th>Serial</th>
                                    <th>Ubicación</th>
                                    <th>Dependencia</th>
                                    <th>Funcionario</th>
                                </thead>
                                <tbody>
                                    @foreach ($devices as $device)
                                        <tr style="cursor:pointer" onclick="location.href = '{{ route('devices.show', $device->id) }}'">
                                            <td>{{ $device->mant }}</td>
                                            <td nowrap>{{ $device->element->name }}</td>
                                          
                                            <td>{{ $device->code }}</td>
                                            <td>{{ $device->serial }}</td>
                                            <td nowrap>{{ $device->ubication->name }}</td>
                                            <td nowrap>{{ $device->dependence->name }}</td>
                                            <td nowrap>{{ $device->funcionary->name }} {{ $device->funcionary->lastname }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div><center>
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