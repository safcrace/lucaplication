@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    Editar Empresa {{ $company->descripcion }}

                  </div>
                 <div class="panel-body">
                   {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'PATCH']) !!}

                     @include('companies.partials.fields')

                    <button type="submit" class="btn btn-default">Actualizar Empresa</button>
                  {!! Form::close() !!}
                 </div>
               </div>
              </div>
        </div>
  </div>
@endsection
