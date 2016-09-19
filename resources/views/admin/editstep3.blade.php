@extends('layouts.app')
@section('subtitle', 'Referencias Personales')
@section('add_stylesheet')
<link rel="stylesheet" href="{{ asset('css/sialen.css') }}" type="text/css" />
@endsection()
@section('content')
{{ Form::open(['route' => ['admin.users.updatestep3', $persona], 'method'=>'PUT', 'files' => true]) }}
<div class="row content">
	{{ Form::hidden('id_persona', $persona) }}
	@foreach ($referencias as $referencia)
		<div id="details">
			<hr>
			<input type="hidden" value="{{ $referencia->id_ref_personal }}" id="id_referencia[]" name="id_referencia[]">
			<div class="row">
			<div class="five columns">
				{{ Form::label('nombre_ref', 'Nombre Referencia')}}
				{{ Form::text('nombre_ref[]', $referencia->nombre_ref, ['class'=>'smoothborder', 'required', 'placeholder'=>'Nombre Referencia'] ) }}
			</div>
			<div class="two columns">
				{{ Form::label('tel', 'Tel. Referencia')}}
				{{ Form::text('tel[]', $referencia->telefono_ref, ['class'=>'smoothborder', 'required', 'placeholder'=>'Tel. Contacto'] ) }}
			</div>
			<div class="two columns">
				{{ Form::label('cel', 'Celular')}}
				{{ Form::text('cel[]', $referencia->celular_ref, ['class'=>'smoothborder', 'required', 'placeholder'=>'3XXXXXXXXXX'] ) }}
			</div>
			<div class="three columns">
				{{ Form::label('tipo_ref', 'Tipo Referencia')}}
				{{ Form::select('tipo_ref[]', array('P'=>'Personal', 'F'=>'Familiar'), $referencia->tipo_referencia,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Selecciona Tipo Ref.--'] ) }}
			</div>
		</div>
		<div class="row">
			<div class="seven columns">
				{{ Form::label('direccion', 'Dirección')}}
				{{ Form::text('direccion[]', $referencia->direccion_ref, ['class'=>'smoothborder', 'required', 'placeholder'=>'Dirección Referencia'] ) }}
			</div>
			<div class="four columns">
				{{ Form::label('parentesco', 'Parentesco')}}
				{{ Form::select('parentesco[]', $parents , $referencia->id_tipo_parentesco,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Selecciona Empresa--'] ) }}
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