@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Control de Usuarios</div>

                  <div class="panel-body">
                     <a href="{{ route('users.create') }}" class="pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>ID</th>
                         <th>Ruta</th>
                         <th>Empresa</th>
                         <th>Nombre</th>
                         <th>Usuario</th>
                         <th>Codigo Proveedor SAP</th>
                         <th>Accion</th>
                       </thead>
                       <tbody>

                           @foreach ($users as $user)
                               <tr>
                                   <td>{{ $user->id}}</td>
                                   <td>{{ $user->route_id}}</td>
                                   <td>{{ $user->company_id}}</td>
                                   <td>{{ $user->name}}</td>
                                   <td>{{ $user->username}}</td>
                                   <td>{{ $user->sap_provider_code}}</td>
                                   <td class="text-center">
                                     <a href="{{ route('users.edit', $user->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> |
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
