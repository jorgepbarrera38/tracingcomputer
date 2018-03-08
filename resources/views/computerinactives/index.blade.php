@extends('layouts.main')
@section('title', 'Dispositivos dados de baja')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dispositivos dados de baja</div>
                <div class="panel-body">
                	@if(count($devices)>0)
	                <table class="table table-hover table-condensed">
	                	<thead>
	                		<th>Tipo de elemento</th>
	                		<th>Descripción</th>
	                		<th>Serial</th>
	                		<th>Placa</th>
	                		<th>Fecha</th>
	                		<th>#</th>
	                	</thead>	
	                	<tbody>
	                		@foreach($devices as $device)
	                			<tr>
	                				<td>{{ $device->element->name }}</td>
	                				<td class="text-justify">{{ $device->description }}</td>
	                				<td>{{ $device->serial }}</td>
	                				<td>{{ $device->code }}</td>
	                				<td>{{ $device->created_at }}</td>
	                				<td><a href="{{ route('computerinactives.show', $device->id) }}" class="btn btn-info btn-sm">Ver info</a></td>
	                			</tr>
	                		@endforeach
	                	</tbody>
	                </table>
	                @else
	                   No hay resultados...
	                @endif
                </div>
            </div>
        </div>
    </div>            
@endsection    