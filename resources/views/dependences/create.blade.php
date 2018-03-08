@extends('layouts.main')
@section('title', 'Nueva dependencia')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva dependencia</div>
                <div class="panel-body">
                    <form action="{{ route('dependences.store') }}" method="POST">
                        {{ csrf_field() }}
                        @include('partials.errors')
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('dependences.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection