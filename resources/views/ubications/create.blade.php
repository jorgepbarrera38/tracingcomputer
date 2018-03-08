@extends('layouts.main')
@section('title', 'Nueva ubicación')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva ubicación</div>
                <div class="panel-body">
                    <form action="{{ route('ubications.store') }}" method="POST">
                        {{ csrf_field() }}
                        @include('partials.errors')
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a href="{{ route('ubications.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection    