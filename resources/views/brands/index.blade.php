@extends('layouts.main')
@section('title', 'Dispositivos')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Marcas<a href="{{ route('brands.create') }}" class="btn btn-primary btn-sm pull-right">Nuevo</a></div>
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>            
@endsection    