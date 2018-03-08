@extends('layouts.main')
@section('title', 'Nuevo funcionario')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo funcionario</div>
                <div class="panel-body">
                    <form action="{{ route('funcionaries.store') }}" method="POST">
                        {{ csrf_field() }}
                        @include('partials.errors')
                        <div class="form-group">
                            <label for="">Identificación</label>
                            <input type="number" class="form-control" name="identification" value="{{ old('identification') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nombres</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Apellidos</label>
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('funcionaries.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection