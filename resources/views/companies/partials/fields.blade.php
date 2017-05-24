<div class="form-group">
   {!! Form::label('name', 'Nombre') !!}
   {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el nombre de la empresa']); !!}
</div>
<div class="form-group">
  {!! Form::label('license_server', 'Licencia de Servidor') !!}
  {!! Form::text('license_server', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca número de licencia del Servidor']); !!}
</div>
 <div class="form-group">
 {!! Form::label('user_sap', 'Usuario SAP') !!}
 {!! Form::text('user_sap', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el nombre de usaurio SAP']); !!}
 </div>
 <div class="form-group">
 {!! Form::label('password_sap', 'Password SAP') !!}
 {!! Form::text('password_sap', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca Password SAP']); !!}
</div>
<div class="form-group">
{!! Form::label('database_sap', 'Base de Datos SAP') !!}
{!! Form::text('database_sap', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca base de datos SAP']); !!}
</div>
<div class="form-group">
{!! Form::label('user_sql', 'Usuario SQL') !!}
{!! Form::text('user_sql', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca usuario SQL']); !!}
</div>
<div class="form-group">
{!! Form::label('password_sql', 'Password SQL') !!}
{!! Form::text('password_sql', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca password SQL']); !!}
</div>
<div class="form-group">
 {!! Form::label('status', 'Activo') !!}
 {!! Form::radio('status', '1'); !!}
 {!! Form::label('status', 'Inactivo') !!}
 {!! Form::radio('status', '0'); !!}
</div>
<div class="form-group">
{!! Form::label('server_sql', 'Servidor SQL') !!}
{!! Form::text('server_sql', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca servidor SQL']); !!}
</div>
<div class="form-group">
{!! Form::label('sap_db_type', 'Tipo de Base de Datos SAP') !!}
{!! Form::text('sap_db_type', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca tipo de base de datos SAP']); !!}
</div>
