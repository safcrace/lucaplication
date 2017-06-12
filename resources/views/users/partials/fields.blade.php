<div class="form-group">
    {!! Form::label('route_id', 'Ruta') !!}
    {!! Form::select('route_id', ['01' => 'Ruta A', '02' => 'Ruta B'], null, ['class' => 'form-control', 'placeholder' => 'Por Favor Seleccione Ruta']); !!}
</div>

<div class="form-group">
    {!! Form::label('company_id', 'Empresa') !!}
    {!! Form::select('company_id', ['01' => 'Ruta 1', '02' => 'Ruta 2'], null, ['class' => 'form-control', 'placeholder' => 'Por Favor Seleccione Empresa']); !!}
</div>

<div class="form-group">
  {!! Form::label('name', 'Nombre') !!}
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca número de licencia del Servidor']); !!}
</div>

 <div class="form-group">
 {!! Form::label('username', 'Usuario') !!}
 {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el nombre de usaurio SAP']); !!}
 </div>

 <div class="form-group">
 {!! Form::label('email', 'Email') !!}
 {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca Password SAP']); !!}
</div>
<div class="form-group">
{!! Form::label('password', 'Contraseña') !!}
{!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca base de datos SAP']); !!}
</div>
<div class="form-group">
{!! Form::label('sap_provider_code', 'Codigo Proveedor SAP') !!}
{!! Form::text('sap_provider_code', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca usuario SQL']); !!}
</div>
