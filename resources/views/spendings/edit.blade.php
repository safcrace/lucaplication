@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    Editar Tipo de Gasto {{ $spending->description }}

                  </div>
                 <div class="panel-body">
                   {!! Form::model($spending, ['route' => ['spendings.update', $spending->id], 'method' => 'PATCH']) !!}

                     @include('spendings.partials.fields')

                    <button type="submit" class="btn btn-default">Actualizar Tipo de Gasto</button>
                  {!! Form::close() !!}
                 </div>
               </div>
              </div>
        </div>
  </div>
@endsection
