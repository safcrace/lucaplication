@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    Editar Proveedor {{ $provider->name }}

                  </div>
                 <div class="panel-body">
                   {!! Form::model($provider, ['route' => ['providers.update', $provider->id], 'method' => 'PATCH']) !!}

                     @include('providers.partials.fields')

                    <button type="submit" class="btn btn-default">Actualizar Empresa</button>
                  {!! Form::close() !!}
                 </div>
               </div>
              </div>
        </div>
  </div>
@endsection
