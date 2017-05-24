@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Control de Rutas</div>

                  <div class="panel-body">
                     <a href="{{ route('routes.create') }}" class="pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>ID</th>
                         <th>Empresa</th>
                         <th>Descripcion</th>
                         <th>Acción</th>
                       </thead>
                       <tbody>

                           @foreach ($routes as $route)
                               <tr>
                                   <td>{{ $route->id}}</td>
                                   <td>{{ $route->company_id}}</td>
                                   <td>{{ $route->description}}</td>
                                   <td class="text-center">
                                     <a href="{{ route('routes.edit', $route->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> |
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
