@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Ingreso de Usuario</div>

                  <div class="panel-body">

                    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

                      @include('users.partials.fields')

                     <button type="submit" class="btn btn-default">Crear Usuario</button>
                   {!! Form::close() !!}

                  </div>
                  </div>
              </div>
        </div>
  </div>
@endsection
