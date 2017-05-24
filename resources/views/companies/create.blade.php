@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Ingreso de Empresas</div>

                  <div class="panel-body">

                    {!! Form::open(['route' => 'companies.store', 'method' => 'POST']) !!}

                      @include('companies.partials.fields')

                     <button type="submit" class="btn btn-default">Crear Empresa</button>
                   {!! Form::close() !!}

                  </div>
                  </div>
              </div>
        </div>
  </div>
@endsection
