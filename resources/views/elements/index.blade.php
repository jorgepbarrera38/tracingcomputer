@extends('layouts.main')
@section('title', 'Elementos')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Tipos de elementos<a href="{{ route('elements.create') }}" class="btn btn-primary btn-sm pull-right">Nuevo</a></div>
                <div class="panel-body">
                    @include('partials.messages')                    
                    <table class="table table-hover">
                        <thead>
                            <th>Elemento</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach ($elements as $element)
                                <tr>
                                    <td>{{ $element->name }}</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Editar</a>
                                        <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection                   