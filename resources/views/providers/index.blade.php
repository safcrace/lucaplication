@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Control de Proveedores</div>

                  <div class="panel-body">
                     <a href="{{ route('providers.create') }}" class="pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>ID</th>
                         <th>Empresa</th>
                         <th>Nit</th>
                         <th>Nombre</th>
                         <th>Acción</th>
                       </thead>
                       <tbody>

                           @foreach ($providers as $provider)
                               <tr>
                                   <td>{{ $provider->id}}</td>
                                   <td>{{ $provider->company_id}}</td>
                                   <td>{{ $provider->nit}}</td>
                                   <td>{{ $provider->name}}</td>
                                   <td class="text-center">
                                     <a href="{{ route('providers.edit', $provider->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> |
                                     <a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                   </td>
                               </tr>
                           @endforeach


                       </tbody>


                      </table>
                  </div>
                  </div>
              </div>
        </div>
  </div>
@endsection
