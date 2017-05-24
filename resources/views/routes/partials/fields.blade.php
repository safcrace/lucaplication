<div class="form-group">
    {!! Form::label('company_id', 'Empresa') !!}
    {!! Form::select('company_id', ['01' => 'Empresa A', '02' => 'Empresa B'], null, ['class' => 'form-control', 'placeholder' => 'Por Seleccione Empresa']); !!}
</div>
<div class="form-group">
   {!! Form::label('description', 'Descripción') !!}
   {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la descripción del crédito']); !!}
</div>
