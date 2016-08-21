@extends('layouts.app')
@section('subtitle', 'Experiencia Laboral')
@section('add_stylesheet')
<link rel="stylesheet" href="{{ asset('css/sialen.css') }}" type="text/css" />
@endsection()
@section('content')

{{ Form::open(['route' => 'admin.users.step2store', 'method'=>'POST', 'files' => true]) }}
<div class="row content">
	{{ Form::hidden('id_persona', $persona) }}
<div id="details">	
	<hr>                               
	<div class="row">
	    <div class="six columns">
	    	{{ Form::label('empresa', 'Nom. Empresa')}} 	                                    	                   
			{{ Form::select('empresa[]', $empresa, null,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Selecciona Empresa--'] ) }}
	    </div>
	    <div class="six columns">
	    	{{ Form::label('cargo', 'Cargo')}} 	                                    	                   
			{{ Form::select('cargo[]', $cargo, null,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Seleccione Cargo--'] ) }}
	    </div>
	</div>
	<div class="row">
	    <div class="four columns">
	    	{{ Form::label('jefe', 'Jefe Inmediato')}} 	                                    	                   
			{{ Form::text('jefe[]', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Jefe Inmediato'] ) }}
	    </div>
	    <div class="two columns">
	    	{{ Form::label('tel', 'Tel. Contacto')}} 	                                    	                   
			{{ Form::text('tel[]', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Tel. Contacto'] ) }}
	    </div>
	    <div class="two columns">
	    	{{ Form::label('ext', 'Ext.')}} 	                                    	                   
			{{ Form::text('ext[]', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Ext.'] ) }}
	    </div>
	    <div class="two columns">
	    	{{ Form::label('ingreso', 'F. Ingreso')}} 	                                    	                   
			{{ Form::date('ingreso[]', \Carbon\Carbon::now(), ['class'=>'smoothborder', 'required'] ) }}
	    </div>
	    <div class="two columns">
	    	{{ Form::label('retiro', 'F. Retiro')}} 	                                    	                   
			{{ Form::date('retiro[]', \Carbon\Carbon::now(), ['class'=>'smoothborder', 'required'] ) }}
	    </div>
	</div>
	<div class="btn-group" role="group" style="float:none;" aria-label="Agregar">
	  	<button type="button" class="btn btn-default addButton"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
	  	<button type="button" class="btn btn-default removeButton"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
	</div>
</div>
</div>
<div class="row">
	<input type="submit" name="submit" value="Guardar y Avanzar" class="btn btn-success" style="float: right;">
</div>
{{ Form::close() }}
@endsection()
@section('add_script')
<script src="{{ asset('js/funciones_especificas/personas.js') }}" type="text/javascript" charset="utf-8" async></script>
@endsection()