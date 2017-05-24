@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    Editar Ruta {{ $route->descripcion }}

                  </div>
                 <div class="panel-body">
                   {!! Form::model($route, ['route' => ['routes.update', $route->id], 'method' => 'PATCH']) !!}

                     @include('routes.partials.fields')

                    <button type="submit" class="btn btn-default">Actualizar Ruta</button>
                  {!! Form::close() !!}
                 </div>
               </div>
              </div>
        </div>
  </div>
@endsection
