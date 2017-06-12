@extends('layouts.app')

@section('content')


  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12 ">
              <div class="panel panel-default">
                  <div class="panel-heading">Control de Tipos de Gasto</div>

                  <div class="panel-body">
                     <a href="{{ route('spendings.create') }}" class="pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                     <table class="table table-bordered table-striped ">
                       <thead>
                         <th>ID</th>
                         <th>Empresa</th>
                         <th>Descripción</th>
                         <th>Exento</th>
                         <th>Monto a Aplica</th>
                         <th>Acción</th>
                       </thead>
                       <tbody>

                           @foreach ($spendings as $spending)
                               <tr>
                                   <td>{{ $spending->id}}</td>
                                   <td>{{ $spending->company_id}}</td>
                                   <td>{{ $spending->description}}</td>
                                   <td>{{ $spending->exempt}}</td>
                                   <td>{{ $spending->amount_to_aply}}</td>
                                   <td class="text-center">
                                     <a href="{{ route('spendings.edit', $spending->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> |
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
