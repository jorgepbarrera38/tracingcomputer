<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Principal<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('devices.index') }}">Dispositivos <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ route('funcionaries.index') }}">Funcionarios</a></li>
                <li><a href="{{ route('ubications.index') }}">Ubicaciónes</a></li>
                <li><a href="{{ route('dependences.index') }}">Dependencias</a></li>
                <li><a href="{{ route('elements.index') }}">Elementos</a></li>
                <li><a href="{{ route('brands.index') }}">Marcas</a></li>
            </ul>
          </li>
          <li><a href="{{ route('reports.index') }}">Reportes</a></li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Avanzado<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('computerinactives.index') }}">Equipos dados de baja</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->username }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                  <li><a style="cursor:pointer" onclick="document.getElementById('myform').submit()">Salir</a></li>
                  <form action="{{ route('logout') }}" method="POST" id="myform" style="display:none">
                      {{ csrf_field() }}
                  </form>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

