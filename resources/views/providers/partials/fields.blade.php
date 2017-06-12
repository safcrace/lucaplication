<div class="form-group">
    {!! Form::label('company_id', 'Empresa') !!}
    {!! Form::select('company_id', ['01' => 'Empresa A', '02' => 'Empresa B'], null, ['class' => 'form-control', 'placeholder' => 'Por Seleccione Empresa']); !!}
</div>
<div class="form-group">
  {!! Form::label('nit', 'No. de Nit') !!}
  {!! Form::text('nit', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca número Nit']); !!}
</div>
 <div class="form-group">
 {!! Form::label('name', 'Nombre') !!}
 {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el nombre del Proveedor']); !!}
 </div>
 <div class="form-group">
 {!! Form::label('address', 'Domicilio') !!}
 {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca domicilio del proveedor']); !!}
</div>
