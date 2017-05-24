@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Ingreso de Rutas</div>

                  <div class="panel-body">

                    {!! Form::open(['route' => 'routes.store', 'method' => 'POST']) !!}

                      @include('routes.partials.fields')

                     <button type="submit" class="btn btn-default">Crear Ruta</button>
                   {!! Form::close() !!}

                  </div>
                  </div>
              </div>
        </div>
  </div>
@endsection
