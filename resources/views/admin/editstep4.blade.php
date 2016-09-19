@extends('layouts.app')
@section('subtitle', 'Educación Formal')
@section('add_stylesheet')
<link rel="stylesheet" href="{{ asset('css/sialen.css') }}" type="text/css" />
@endsection()
@section('content')

{{ Form::open(['route' => ['admin.users.updatestep4', $persona], 'method'=>'PUT', 'files' => true]) }}
<div class="row content">
	{{ Form::hidden('id_persona', $persona) }}
	@foreach($educacion as $educa)
	<div id="details">
		<hr>
		<input type="hidden" value="{{ $educa->id_estudio_realizado }}" id="id_formacion[]" name="id_formacion[]">
		<div class="row">
			<div class="five columns">
				{{ Form::label('nombre_inst', 'Nombre Institución')}}
				{{ Form::select('nombre_inst[]', $institucion, $educa->id_organizacion,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Selecciona Intitución--'] ) }}
			</div>
			<div class="five columns">
				{{ Form::label('tipo_for', 'Tipo de Formación')}}
				{{ Form::select('tipo_for[]', $tipo_formacion, $educa->id_tipo_formacion,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Selecciona tipo formación--'] ) }}
			</div>
			<div class="two columns">
				{{ Form::label('anio', 'Año Egresado')}}
				{{ Form::text('anio[]', $educa->anyo_egresado, ['class'=>'smoothborder', 'required', 'placeholder'=>'xxxx'] ) }}
			</div>
		</div>
		<div class="row">
			<div class="six columns">
				{{ Form::label('titulo', 'Titulo Profesional')}}
				{{ Form::text('titulo[]', $educa->titulo_obtenido, ['class'=>'smoothborder', 'required', 'placeholder'=>'Titulo Profesional'] ) }}
			</div>
			<div class="four columns">
				{{ Form::label('titulo_obt', 'Titulo Obtenido')}}
				{{ Form::select('titulo_obt[]', $area_conocimiento, $educa->id_titulo_profesional ,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Selecciona Titulo--'] ) }}
			</div>
		</div>
		<div class="btn-group" role="group" style="float:none;" aria-label="Agregar">
			<button type="button" class="btn btn-default addButton"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
			<button type="button" class="btn btn-default removeButton"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
		</div>
	</div>
	@endforeach
</div>
<div class="row">
	<input type="submit" name="submit" value="Guardar y Avanzar" class="btn btn-success" style="float: right;">
</div>
{{ Form::close() }}
@endsection()
@section('add_script')
<script src="{{ asset('js/funciones_especificas/personas.js') }}" type="text/javascript" charset="utf-8" async></script>
@endsection()