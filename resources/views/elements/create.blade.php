@extends('layouts.main')
@section('title', 'Nuevo elemento')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo elemento</div>
                <div class="panel-body">
                    <form action="{{ route('elements.store') }}" method="POST">
                        {{ csrf_field() }}
                        @include('partials.errors')
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('elements.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection