@extends('layouts.main')
@section('title', 'Editar dispositivo')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editar dispositivo</div>
                <div class="panel-body">
                    <form action="{{ route('devices.update', $device->id) }}" method="post">
                        @include('partials.errors')
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Elemento</label>
                                    <select name="element_id" class="form-control">
                                        <option value="">Selecione una opción</option>
                                        @foreach ($elements as $element)
                                            <option value="{{ $element->id }}" {{ $device->element_id == $element->id ? 'selected' : '' }} {{ old('element_id') == $element->id ? 'selected' : '' }}>{{ $element->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <form-group>
                                    <label for="">Marca</label>
                                    <select name="brand_id" class="form-control">
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $device->brand_id == $brand->id ? 'selected' : '' }} {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </form-group>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Serial</label>
                                    <input type="text" class="form-control" name="serial" value="{{ old('serial') ?   old('serial') : $device->serial }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Placa</label>
                                    <input type="text" class="form-control" name="code" value="{{ old('code') ?   old('code') : $device->code }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Descripción</label>
                                    <textarea name="description" class="form-control" cols="30" rows="3">{{ old('description') ?   old('description') : $device->description }}</textarea>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Observaciónes</label>
                                    <textarea name="observations" rows="3" class="form-control">{{ old('observations') ?   old('observations') : $device->observations }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Estado</label>
                                        <select name="status" class="form-control">
                                            <option value="MALO" {{ old('status') == 'MALO' ? 'selected' : '' }}>Malo</option>
                                            <option value="REGULAR" {{ old('status') == 'REGULAR' ? 'selected' : '' }}>Regular</option>
                                            <option value="BUENO" {{ old('status') == 'BUENO' ? 'selected' : '' }}>Bueno</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Forma de adquisición</label>
                                    <select name="acquisition" class="form-control">
                                        <option value="COMPRA" {{ $device->acquisition == 'COMPRA' ? 'selected' : '' }} {{ old('acquisition') == 'COMPRA' ? 'selected' : '' }}>COMPRA</option>
                                        <option value="DONACIÓN" {{ $device->acquisition == 'DONACIÓN' ? 'selected' : '' }} {{ old('acquisition') == 'DONACIÓN' ? 'selected' : '' }}>DONACIÓN</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Costo de adquisición</label>
                                    <input type="number" class="form-control" name="cost" value="{{ old('cost') ? old('cost') : $device->cost }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fecha de compra</label>
                                    <input type="date" class="form-control" name="datebuy" value="{{ old('datebuy') ? old('datebuy') : $device->datebuy }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Inicio de operación</label>
                                    <input type="date" class="form-control" name="initoperation" value="{{ old('initoperation') ? old('initoperation') : $device->initoperation }}">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="">Vida útil</label>
                                    <input type="number" class="form-control" name="usefullife" value="{{ old('usefullife') ? old('usefullife') : $device->usefullife }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <center><button type="submit" class="btn btn-primary">Guardar cambios</button>
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection