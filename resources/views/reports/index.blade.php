@extends('layouts.main')
@section('title', 'Dispositivos')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Información detallada</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <strong>Total de Dispositivos</strong>
                            {{ $devices->count() }} <br>
                            @foreach($devices->groupBy('element_id') as $device)
                                {{ $device[0]->element->name }}: {{ $device->count() }} <br>
                            @endforeach
                        </div>
                        <hr>
                        @foreach($ubications as $ubication)
                            <div class="form-group">
                                <strong>{{ $ubication->name }}</strong>
                                {{ $ubication->devices->where('state', 'active')->count() }} <br>
                                @foreach($ubication->devices->where('state', 'active')->groupBy('element_id') as $device)
                                    {{ $device[0]->element->name }}: {{ $device->count() }} <br>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>   
        </div>    
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Generar hojas de vida</div>
                <div class="panel-body">
                    <form action="{{ route('report.all') }}" method="get" target="_blank">
                        <div class="form-group">
                            <label for="">Por ubicación</label>
                            <select name="ubication" class="form-control">
                                <option value="">Todos</option>
                                @foreach($ubications as $ubication)
                                    <option value="{{ $ubication->id }}">{{ $ubication->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button target="" type="submit" class="btn btn-primary">Exportar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
@endsection