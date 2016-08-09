@extends('layouts.app')
@section('subtitle', 'Usuario Nuevo')
@section('add_stylesheet')
<link rel="stylesheet" href="{{ asset('css/sialen.css') }}" type="text/css" />
@endsection()

@section('add_script')
<script src="{{ asset('js/funciones_especificas/personas.js') }}" type="text/javascript" charset="utf-8" async></script>
@endsection()

@section('content')
{{ Form::open(['route' => 'admin.users.store', 'method'=>'POST', 'files' => true]) }}
<div class="row content">
	<div class="row">
    <hr>
    	<a class="btn btn-danger pull-right" href="{{ route('admin.users.index') }}" role="button">
    		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp;Volver
    	</a>
	    <div class="twelve columns" >

	    	<fieldset>
                <legend>Datos Personales</legend>
                <div class="row">
                    <div class="foto three columns">
                    	
                        <img src="{{ asset('images/gravatar.png') }}" alt="" width="80" class="avatar_inter"/>

                    </div>
                    <div class="four columns">
                    	{{ Form::label('primer_nom', 'Primer Nombre') }}
                        {{ Form::text('primer_nom', null,['class'=>'smoothborder', 'required', 'placeholder'=>'Primer Nombre'] ) }}
                    </div>
                    <div class="four columns">
                    	{{ Form::label('segundo_nom', 'Segundo Nombre') }}
                        {{ Form::text('segundo_nom', null,['class'=>'smoothborder', 'required', 'placeholder'=>'Segundo Nombre'] ) }}
                    </div>

                    <div class="four columns">
                    	{{ Form::label('primer_ape', 'Primer Apellido') }}
                        {{ Form::text('primer_ape', null,['class'=>'smoothborder', 'required', 'placeholder'=>'Primer Apellido'] ) }}
                    </div>
                    <div class="four columns">
                    	{{ Form::label('segundo_ape', 'Segundo Apellido') }}
                        {{ Form::text('segundo_ape', null,['class'=>'smoothborder', 'required', 'placeholder'=>'Segundo Apellido'] ) }}                        
                    </div>
                    <div class="three columns">
                    	{{ Form::label('doc_identidad', 'Documento de Identidad (D.N.I)') }}
                        {{ Form::text('doc_identidad', null,['class'=>'smoothborder', 'required', 'placeholder'=>'Documento de Identidad'] ) }}
                    </div>
                    <div class="three columns">
                    	{{ Form::label('fecha_nac', 'Fecha de Nacimiento') }}
                        {{ Form::date('fecha_nac',  \Carbon\Carbon::now(), ['class'=>'smoothborder', 'required'] ) }}                        
                    </div> 
                    <div class="three columns">
                     	{{ Form::label('genero', 'Genero') }}                        
                        {{ Form::select('genero', ['M'=>'Masculino','F'=>'Femenino'], ['class'=>'smoothborder', 'required'] ) }}                         
                    </div>
                </div>
                <div class="row">
                </div>
            </fieldset>
            <fieldset>
                <legend>Datos de Contacto</legend>
                <div class="row">
                   <div class="eight columns">
                        {{ Form::label('direccion', 'Dirección de residencia') }}
                        {{ Form::text('direccion', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Dirección'] ) }}                       
                    </div>
                    <div class="four columns">
                        {{ Form::label('ciudad', 'Ciudad') }}                        
                        {{ Form::select('ciudad', $ciudad, null, ['class'=>'form-control select-tag', 'required'] ) }}                        
                    </div>
                </div>
                <div class="row">
                    <div class="eight columns">
                        {{ Form::label('email', 'Email') }}                        
                        {{ Form::text('email', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Email'] ) }}                       
                    </div>
                    <div class="two columns">
                        {{ Form::label('telefono', 'Teléfono') }}                        
                        {{ Form::text('telefono', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Teléfono'] ) }}                       
                    </div>
                    <div class="two columns">
                        {{ Form::label('celular', 'Celular') }}                        
                        {{ Form::text('celular', null, ['class'=>'smoothborder', 'required', 'placeholder'=>'Celular'] ) }} 
                    </div>
                </div>
            </fieldset>
	    </div>
    </div>
    <input type="submit" name="submit" value="Guardar y Avanzar" class="btn btn-success" style="float: right;">
</div>
{{ Form::close() }}
@endsection()