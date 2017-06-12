@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Ingreso de Tipo de Gasto</div>

                  <div class="panel-body">

                    {!! Form::open(['route' => 'spendings.store', 'method' => 'POST']) !!}

                      @include('spendings.partials.fields')

                     <button type="submit" class="btn btn-default">Crear Tipo de Gasto</button>
                   {!! Form::close() !!}

                  </div>
                  </div>
              </div>
        </div>
  </div>
@endsection
