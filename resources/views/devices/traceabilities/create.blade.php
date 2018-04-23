@extends('layouts.main')
@section('title', 'Ver dispositivo')
@section('content')
    <div class="row"><br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar movimiento</div>
                <div class="panel-body">
                    @if($errors->any())
                       <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                       </div>
                    @endif
                    <form action="{{ route('traceabilities.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="device_id" value="{{ $device->id }}">
                        <div class="form-group">
                            <label for="">Funcionario</label>
                            <select name="funcionary_id" class="form-control">
                                <option value="{{ $device->funcionary->id }}">Actual: {{ $device->funcionary->name }}</option>
                                @foreach ($funcionaries as $funcionary)
                                    @if($funcionary->id <> $device->funcionary->id)
                                        <option value="{{ $funcionary->id }}">{{ $funcionary->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Ubicación</label>
                            <select name="ubication_id" class="form-control">
                                <option value="{{ $device->ubication->id }}">Actual: {{ $device->ubication->name }}</option>
                                @foreach ($ubications as $ubication)
                                    @if($ubication->id <> $device->ubication->id)
                                        <option value="{{ $ubication->id }}">{{ $ubication->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Dependencia</label>
                            <select name="dependence_id" class="form-control">
                                <option value="{{ $device->dependence->id }}">Actual: {{ $device->dependence->name }}</option>
                                @foreach ($dependences as $dependence)
                                    @if($dependence->id <> $device->dependence->id)
                                        <option value="{{ $dependence->id }}">{{ $dependence->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Observaciónes</label>
                            <textarea name="observations" rows="3" class="form-control">{{ old('observations') }}</textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('devices.show', $device->id) }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection