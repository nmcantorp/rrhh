<!-- Id Organizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_organizacion', 'Id Organizacion:') !!}
    {!! Form::number('id_organizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Organizacion Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_organizacion_padre', 'Id Organizacion Padre:') !!}
    {!! Form::number('id_organizacion_padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Sec Financiero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_sec_financiero', 'Id Sec Financiero:') !!}
    {!! Form::number('id_sec_financiero', null, ['class' => 'form-control']) !!}
</div>

<!-- Nit Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nit_empresa', 'Nit Empresa:') !!}
    {!! Form::text('nit_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_empresa', 'Nombre Empresa:') !!}
    {!! Form::text('nombre_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Pbx Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_pbx', 'Telefono Pbx:') !!}
    {!! Form::text('telefono_pbx', null, ['class' => 'form-control']) !!}
</div>

<!-- Web Site Field -->
<div class="form-group col-sm-6">
    {!! Form::label('web_site', 'Web Site:') !!}
    {!! Form::text('web_site', null, ['class' => 'form-control']) !!}
</div>

<!-- Sigla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sigla', 'Sigla:') !!}
    {!! Form::text('sigla', null, ['class' => 'form-control']) !!}
</div>

<!-- Anyo Fundacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anyo_fundacion', 'Anyo Fundacion:') !!}
    {!! Form::text('anyo_fundacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Clasificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clasificacion', 'Clasificacion:') !!}
    {!! Form::text('clasificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Creacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_creacion', 'Fecha Creacion:') !!}
    {!! Form::date('fecha_creacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Creador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_creador', 'Usuario Creador:') !!}
    {!! Form::text('usuario_creador', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Modificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_modificacion', 'Fecha Modificacion:') !!}
    {!! Form::date('fecha_modificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Creador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_creador', 'Fecha Creador:') !!}
    {!! Form::text('fecha_creador', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.organizaciones.index') !!}" class="btn btn-default">Cancel</a>
</div>
