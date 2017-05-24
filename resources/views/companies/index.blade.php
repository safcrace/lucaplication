@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Control de Empresas</div>

                  <div class="panel-body">
                     <a href="{{ route('companies.create') }}" class="pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>ID</th>
                         <th>Nombre</th>
                         <th>Licencia de Servidor</th>
                         <th>Status</th>
                         <th>Acción</th>
                       </thead>
                       <tbody>

                           @foreach ($companies as $company)
                               <tr>
                                   <td>{{ $company->id}}</td>
                                   <td>{{ $company->name}}</td>
                                   <td>{{ $company->license_server}}</td>
                                   <td>{{ $company->status}}</td>
                                   <td class="text-center">
                                     <a href="{{ route('companies.edit', $company->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> |
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
