@extends('layouts.main')
@section('title', 'Dispositivo')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Información del dispositivo</div>
                <div class="panel-body">
	              ...
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Trazabilidad del dispositivo</div>
                <div class="panel-body">
	              <table class="table table-hover table-condensed">
	              		<thead>
	              			<th>Fecha</th>
	              			<th>Ubicación</th>
	              			<th>Funcionario</th>
	              			<th>Dependencia</th>
	              			<th>Oservación</th>
	              		</thead>
	              		<tbody>
	              			@foreach($device->traceabilities as $traceability)
	              				<tr>
	              					<td>{{ $traceability->created_at }}</td>
	              					<td>{{ $traceability->ubication->name }}</td>
	              					<td>{{ $traceability->funcionary->name }}</td>
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
@endsection    