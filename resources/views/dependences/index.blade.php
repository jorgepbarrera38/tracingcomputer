@extends('layouts.main')
@section('title', 'Dependencias')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dependencias<a href="{{ route('dependences.create') }}" class="btn btn-primary btn-sm pull-right">Nuevo</a></div>
                <div class="panel-body">
                        <form class="navbar-form navbar-left" action="" method="get">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Buscar dependencia" name="dependence" value="{{ $dependenceSearch }}">
                                </div>
                                <button type="submit" class="btn btn-default">Buscar</button>
                              </form>
                    @include('partials.messages')                    
                    <table class="table table-hover">
                        <thead>
                            <th>Dependencia</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach ($dependences as $dependence)
                                <tr>
                                    <td>{{ $dependence->name }}</td>
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