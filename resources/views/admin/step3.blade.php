@extends('layouts.app')
@section('subtitle', 'Referencias Personales')
@section('add_stylesheet')
<link rel="stylesheet" href="{{ asset('css/sialen.css') }}" type="text/css" />
@endsection()
@section('content')

{{ Form::open(['route' => 'admin.users.step3store', 'method'=>'POST', 'files' => true]) }}
<div class="row content">
	{{ Form::hidden('id_persona', $persona) }}
<div id="details">	
	<hr>                               
	<div class="row">
	    <div class="five columns">
	    	{{ Form::label('nombre_ref', 'Nombre Referencia')}} 	                                    	                   
			{{ Form::text('nombre_ref[]', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Nombre Referencia'] ) }}
	    </div>
	    <div class="two columns">
	    	{{ Form::label('tel', 'Tel. Referencia')}} 	                                    	                   
			{{ Form::text('tel[]', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Tel. Contacto'] ) }}
	    </div>
	    <div class="two columns">
	    	{{ Form::label('cel', 'Celular')}} 	                                    	                   
			{{ Form::text('cel[]', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'3XXXXXXXXXX'] ) }}
	    </div>
	    <div class="three columns">
	    	{{ Form::label('tipo_ref', 'Tipo Referencia')}} 	                                    	                   
			{{ Form::select('tipo_ref[]', array('P'=>'Personal', 'F'=>'Familiar'), null,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Selecciona Tipo Ref.--'] ) }}
	    </div>	    
	</div>
	<div class="row">
	    <div class="seven columns">
	    	{{ Form::label('direccion', 'Dirección')}} 	                                    	                   
			{{ Form::text('direccion[]', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Dirección Referencia'] ) }}
		</div>
	    <div class="four columns">
	    	{{ Form::label('parentesco', 'Parentesco')}} 	                                    	                   
			{{ Form::select('parentesco[]', array(), null,['class'=>'smoothborder form-control', 'required', 'placeholder'=>'--Selecciona Empresa--'] ) }}
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