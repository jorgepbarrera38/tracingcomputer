@extends('layouts.main')
@section('title', 'Nuevo dispositivo')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar nuevo dispositivo</div>
                <div class="panel-body">
                    <form action="{{ route('devices.store') }}" method="POST">
                        {{ csrf_field() }}
                        @include('partials.errors')
                        @include('partials.messages') 
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Elemento</label>
                                <select name="element_id" class="form-control">
                                    <option value="">Selecione una opción</option>
                                    @foreach ($elements as $element)
                                        <option value="{{ $element->id }}" {{ old('element_id') == $element->id ? 'selected' : '' }}>{{ $element->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Funcionario</label>
                                <select name="funcionary_id" class="form-control">
                                    <option value="">Seleccione funcionario</option>
                                    @foreach ($funcionaries as $funcionary)
                                        <option value="{{ $funcionary->id }}" {{ old('funcionary_id') == $funcionary->id ? 'selected' : '' }}>{{ $funcionary->name." ".$funcionary->lastname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Ubicación</label>
                                <select name="ubication_id" class="form-control">
                                    <option value="">Seleccione ubicación</option>
                                    @foreach ($ubications as $ubication)
                                        <option value="{{ $ubication->id }}" {{ old('ubication_id') == $ubication->id ? 'selected' : '' }}>{{ $ubication->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Dependencia</label>
                                <select name="dependence_id" class="form-control">
                                        <option value="">Seleccione dependencia</option>
                                    @foreach ($dependences as $dependency)
                                        <option value="{{ $dependency->id }}" {{ old('dependence_id') == $dependency->id ? 'selected' : '' }}>{{ $dependency->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <form-group>
                                <label for="">Marca</label>
                                <select name="brand_id" class="form-control">
                                    <option value="">Seleccione una marca</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </form-group>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Serial</label>
                                <input type="text" class="form-control" name="serial" value="{{ old('serial') }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Placa</label>
                                <input type="text" class="form-control" name="code" value="{{ old('code') }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Estado</label>
                                    <select name="status" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="MALO" {{ old('status') == 'MALO' ? 'selected' : '' }}>Malo</option>
                                        <option value="REGULAR" {{ old('status') == 'REGULAR' ? 'selected' : '' }}>Regular</option>
                                        <option value="BUENO" {{ old('status') == 'BUENO' ? 'selected' : '' }}>Bueno</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <textarea name="description" class="form-control" cols="30" rows="3">{{ old('description') }}</textarea>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Observaciónes</label>
                                <textarea name="observations" rows="3" class="form-control">{{ old('observations') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Forma de adquisición</label>
                                <select name="acquisition" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                    <option value="COMPRA" {{ old('acquisition') == 'COMPRA' ? 'selected' : '' }}>COMPRA</option>
                                    <option value="DONACIÓN" {{ old('acquisition') == 'DONACIÓN' ? 'selected' : '' }}>DONACIÓN</option>
                                </select>
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Costo de adquisición</label>
                                <input type="number" class="form-control" name="cost" value="{{ old('cost') }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de compra</label>
                                <input type="date" class="form-control" name="datebuy" value="{{ old('datebuy') }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Inicio de operación</label>
                                <input type="date" class="form-control" name="initoperation" value="{{ old('initoperation') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Vida útil</label>
                                <input type="number" class="form-control" name="usefullife" value="{{ old('usefullife') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <center><button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('devices.index') }}" class="btn btn-danger">Cancelar</a></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection