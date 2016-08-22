<!-- Id Pais Field --
<div class="form-group col-sm-6">
    {!! Form::label('id_pais', 'Id Pais:') !!}
    {!! Form::number('id_pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_pais', 'Nombre Pais:') !!}
    {!! Form::text('nombre_pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Postal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_postal', 'Cod Postal:') !!}
    {!! Form::number('cod_postal', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Creacion Field --
<div class="form-group col-sm-6">
    {!! Form::label('fecha_creacion', 'Fecha Creacion:') !!}
    {!! Form::date('fecha_creacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Creador Field --
<div class="form-group col-sm-6">
    {!! Form::label('usuario_creador', 'Usuario Creador:') !!}
    {!! Form::text('usuario_creador', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Modificacion Field --
<div class="form-group col-sm-6">
    {!! Form::label('fecha_modificacion', 'Fecha Modificacion:') !!}
    {!! Form::date('fecha_modificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Modificador Field --
<div class="form-group col-sm-6">
    {!! Form::label('usuario_modificador', 'Usuario Modificador:') !!}
    {!! Form::text('usuario_modificador', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.paises.index') !!}" class="btn btn-default">Cancel</a>
</div>
