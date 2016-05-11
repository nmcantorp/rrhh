@extends('layouts.app')
@section('subtitle') 	
 	Informaci&oacute;n detallada <span class="label label-default">{{ $persona->primer_nom }} {{ $persona->primer_ape }}</span>
@endsection()
@section('content')
<link rel="stylesheet" href="{{ asset('css/sialen.css') }}" >
<div class="row content">
    <div class="row">
    <hr>
	    <div class="twelve columns" >
	    	<fieldset>
                <legend>Datos Personales</legend>
                <div class="row">
                    <div class="foto three columns">
                    	@if ($persona->foto)
                            <img src="{{ asset('images/avatar/$persona->foto') }}" alt="" width="80" class="avatar_inter"/>
                        @else
                            <img src="{{ asset('images/gravatar.png') }}" alt="" width="80" class="avatar_inter"/>
                    	@endif
                    </div>
                    <div class="four columns">
                        <label>Primer Nombre</label>
                        <input type="text" class="smoothborder" name="primer_nom" id="primer_nom" maxlength="20" required="" value="{{ $persona->primer_nom }}" />
                    </div>
                    <div class="four columns">
                        <label>Segundo Nombre</label>
                        <input type="text" class="smoothborder" name="segundo_nom" id="segundo_nom" maxlength="20" value="{{ $persona->segundo_nom }}"/>
                    </div>

                    <div class="four columns">
                        <label>Primer Apellido</label>
                        <input type="text" class="smoothborder" name="primer_ape" id="primer_ape" maxlength="20" required="" value="{{ $persona->primer_ape }}" />
                    </div>
                    <div class="four columns">
                        <label>Segundo Apellido</label>
                        <input type="text" class="smoothborder" name="segundo_ape" id="segundo_ape" maxlength="20" value="{{ $persona->segundo_ape }}" />
                    </div>
                    <div class="three columns">
                        <label>Documento de Identidad (D.N.I)</label>
                        <input type="text" class="smoothborder" name="doc_identidad" id="doc_identidad" maxlength="15" onkeypress="return numero(event);" required="" value="{{ $persona->doc_identidad }}"/>
                    </div>
                    <div class="three columns">
                        <label>Fecha de Nacimiento</label>
                        <input type="date" class="smoothborder" name="fecha_nac" id="fecha_nac" required="" value="{{ $persona->fecha_nac }}"/>
                    </div> 
                    <div class="three columns">
                        <label>Genero</label>
                        <select class="smoothborder" id="genero" name="genero" required="" >
                            <option value=""></option>
                            <option value="M" @if ( $persona->genero == 'M') {{'selected'}} @endif >Masculino</option>
                            <option value="F" @if ( $persona->genero == 'F') {{'selected'}} @endif>Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                </div>
            </fieldset>
	    </div>
    </div>
</div>	

@endsection()