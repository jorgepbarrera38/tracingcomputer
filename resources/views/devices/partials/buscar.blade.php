<form class="" action="" method="get">
        <div class="row">
                <div class="col-md-3">
                        <div class="form-group {{ request('ubication') ? 'has-warning':'' }}">
                                <label for="">Ubicación</label>
                                <select name="ubication" class="form-control">
                                    <option value="">Todos</option>
                                    @foreach($ubications as $ubication)
                                            <option value="{{ $ubication->id }}" {{ $ubication->id == $ubicationsearch? 'selected':'' }}>{{ $ubication->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="form-group {{ request('dependence') ? 'has-warning':'' }}">
                                <label for="">Dependencia</label>
                                <select name="dependence" class="form-control">
                                    <option value="">Todos</option>
                                    @foreach($dependences as $dependence)
                                        <option value="{{ $dependence->id }}" {{ $dependence->id == $dependencesearch? 'selected':'' }}>{{ $dependence->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                </div>
                <div class="col-md-3">
                        <div class="form-group {{ request('funcionary') ? 'has-warning':'' }}">
                                <label for="">Funcionario</label>
                                <select name="funcionary" class="form-control">
                                    <option value="">Todos</option>
                                    @foreach($funcionaries as $funcionary)
                                        <option value="{{ $funcionary->id }}" {{ $funcionary->id == $funcionarysearch ? 'selected':'' }}>{{ $funcionary->name." ".$funcionary->lastname }}</option>
                                    @endforeach
                                </select>
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="form-group {{ request('codeserial') ? 'has-warning':'' }}">
                                <label for="">Placa o Serial</label>
                                <input type="text" class="form-control" placeholder="Placa o serial" name="codeserial" value="{{ $codeserialsearch }}">
                            </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Buscar</button>
                
            </div>
        </div>
    </form>