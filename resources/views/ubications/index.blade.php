@extends('layouts.main')
@section('title', 'Ubicaciónes')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ubicaciónes<a href="{{ route('ubications.create') }}" class="btn btn-primary btn-sm pull-right">Nuevo</a></div>
                <div class="panel-body">
                    @include('partials.messages')
                    <table class="table table-hover">
                        <thead>
                            <th>Ubicación</th>
                            <th>Acciónes</th>
                        </thead>
                        <tbody>
                            @foreach ($ubications as $ubication)
                                <tr>
                                    <td>{{ $ubication->name }}</td>
                                    <td>
                                        <form action="">
                                            <a href="" class="btn btn-success btn-sm">Editar</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
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