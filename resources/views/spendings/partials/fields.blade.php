{{--<div class="form-group">
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
--}}
<div class="row">
  <div class="col-md-2">
    <h4 class="pull-right">ID</h4>
  </div>
  <div class="row">
    <div class="col-md-4">
      {!! Form::text('id', null, ['class' => 'form-control', 'disabled' => 'true']); !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <h4 class="pull-right">Empresa</h4>
  </div>
  <div class="row">
    <div class="col-md-4">
      {!! Form::select('company_id', ['01' => 'Empresa A', '02' => 'Empresa B'], null, ['class' => 'form-control', 'placeholder' => 'Por Seleccione Empresa']); !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <h4 class="pull-right">Descripción</h4>
  </div>
  <div class="row">
    <div class="col-md-4">
      {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca descripción del gasto']); !!}
    </div>
  </div>
</div>

<hr>

<div class="row">
  <div class="col-md-2">
    <h4 class="pull-right">Exento</h4>
  </div>
  <div class="row">
    <div class="col-md-1">
      SI {!! Form::radio('exempt', '1'); !!}
    </div>
    <div class="col-md-1">
      <h4 class="pull-right">Tipo</h4>
    </div>
    <div class="col-md-2">
      {!! Form::select('type_quantity_percentaje_custom', ['01' => 'Cantidad', '02' => 'Porcentaje', '03' => 'Custom'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione Tipo']); !!}
    </div>
    <div class="col-md-2">
      {!! Form::text('amount_to_aply', null, ['class' => 'form-control', 'placeholder' => 'Valor a aplicar']); !!}
    </div>
    <div class="col-md-2">
      {!! Form::text('unit', null, ['class' => 'form-control', 'placeholder' => 'Unidad de Medida']); !!}
    </div>

  </div>
</div>
<div class="row">
  <div class="col-md-1 col-md-offset-2">
    NO {!! Form::radio('exempt', '2'); !!}
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading"><h4>Excento</h4></div>
      <div class="panel-body">
        <div class="row">
            <h5 class="text-center">Cuenta Contable</h5>
            {!! Form::text('accounting_acount_exempt', null, ['class' => 'form-control', 'placeholder' => 'Cuenta Exenta']); !!}

        </div>
        <div class="row">
            <h5 class="text-center">Cuenta Impuesto</h5>
            {!! Form::text('tax_acount_exempt', null, ['class' => 'form-control', 'placeholder' => 'Cuenta Impuesto']); !!}
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading"><h4>Afecto</h4></div>
      <div class="panel-body">
        <div class="row">
            <h5 class="text-center">Cuenta Contable</h5>
            {!! Form::text('accounting_acount_affection', null, ['class' => 'form-control', 'placeholder' => 'Cuenta Exenta']); !!}

        </div>
        <div class="row">
            <h5 class="text-center">Cuenta Impuesto</h5>
            {!! Form::text('tax_acount_affection', null, ['class' => 'form-control', 'placeholder' => 'Cuenta Impuesto']); !!}
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading"><h4>Remanente</h4></div>
      <div class="panel-body">
        <div class="row">
            <h5 class="text-center">Cuenta Contable</h5>
            {!! Form::text('accounting_acount_remaining', null, ['class' => 'form-control', 'placeholder' => 'Cuenta Exenta']); !!}

        </div>
        <div class="row">
            <h5 class="text-center">Cuenta Impuesto</h5>
            {!! Form::text('tax_acount_remaining', null, ['class' => 'form-control', 'placeholder' => 'Cuenta Impuesto']); !!}
        </div>
      </div>
    </div>
  </div>
</div>
