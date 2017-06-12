@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Ingreso de Proveedores</div>

                  <div class="panel-body">

                    {!! Form::open(['route' => 'providers.store', 'method' => 'POST']) !!}

                      @include('providers.partials.fields')

                     <button type="submit" class="btn btn-default">Crear Proveedor</button>
                   {!! Form::close() !!}

                  </div>
                  </div>
              </div>
        </div>
  </div>
@endsection
