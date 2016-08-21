@extends('layouts.app')
@section('subtitle') 	
 	Informaci&oacute;n detallada <span class="label label-default">{{ $persona->primer_nom }} {{ $persona->primer_ape }}</span>
@endsection()
@section('content')

@section('add_stylesheet')
<link rel="stylesheet" href="{{ asset('css/sialen.css') }}" >
@endsection()

@section('add_script')
<script src="{{ asset('js/funciones_especificas/personas.js') }}" type="text/javascript" charset="utf-8" async></script>
@endsection()
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
                    	@if ($persona->foto)
                            <img src="{{ asset('images/avatar/'.$persona->foto) }}" alt="" width="80" class="avatar_inter"/>
                        @else
                            <img src="{{ asset('images/gravatar.png') }}" alt="" width="80" class="avatar_inter"/>
                    	@endif
                    </div>
                    <div class="four columns">
                    	{{ Form::label('primer_nom', 'Primer Nombre') }}
                        {{ Form::text('primer_nom', $persona->primer_nom, ['class'=>'smoothborder', 'required', 'placeholder'=>'Primer Nombre'] ) }}
                    </div>
                    <div class="four columns">
                    	{{ Form::label('segundo_nom', 'Segundo Nombre') }}
                        {{ Form::text('segundo_nom', $persona->segundo_nom, ['class'=>'smoothborder', 'required', 'placeholder'=>'Segundo Nombre'] ) }}
                    </div>

                    <div class="four columns">
                    	{{ Form::label('primer_ape', 'Primer Apellido') }}
                        {{ Form::text('primer_ape', $persona->primer_ape, ['class'=>'smoothborder', 'required', 'placeholder'=>'Primer Apellido'] ) }}
                    </div>
                    <div class="four columns">
                    	{{ Form::label('segundo_ape', 'Segundo Apellido') }}
                        {{ Form::text('segundo_ape', $persona->segundo_ape, ['class'=>'smoothborder', 'required', 'placeholder'=>'Segundo Apellido'] ) }}                        
                    </div>
                    <div class="three columns">
                    	{{ Form::label('doc_identidad', 'Documento de Identidad (D.N.I)') }}
                        {{ Form::text('doc_identidad', $persona->doc_identidad, ['class'=>'smoothborder', 'required', 'placeholder'=>'Documento de Identidad'] ) }}
                    </div>
                    <div class="three columns">
                    	{{ Form::label('fecha_nac', 'Fecha de Nacimiento') }}
                        {{ Form::date('fecha_nac', $persona->fecha_nac, ['class'=>'smoothborder', 'required'] ) }}                        
                    </div> 
                    <div class="three columns">
                     	{{ Form::label('genero', 'Genero') }}                        
                        {{ Form::select('genero', ['M'=>'Masculino','F'=>'Femenino'], $persona->genero, ['class'=>'smoothborder', 'required'] ) }}                         
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
                        {{ Form::text('direccion', $persona->direccion, ['class'=>'smoothborder', 'required', 'placeholder'=>'Dirección'] ) }}                       
                    </div>
                    <div class="four columns">
                        {{ Form::label('ciudad', 'Ciudad') }}                        
                        {{ Form::select('ciudad', $ciudad, $persona->id_ciudad, ['class'=>'form-control select-tag', 'required'] ) }}                        
                    </div>
                </div>
                <div class="row">
                    <div class="eight columns">
                        {{ Form::label('email', 'Email') }}                        
                        {{ Form::text('email', $persona->email, ['class'=>'smoothborder', 'required', 'placeholder'=>'Email'] ) }}                       
                    </div>
                    <div class="two columns">
                        {{ Form::label('telefono', 'Teléfono') }}                        
                        {{ Form::text('telefono', $persona->telefono, ['class'=>'smoothborder', 'required', 'placeholder'=>'Teléfono'] ) }}                       
                    </div>
                    <div class="two columns">
                        {{ Form::label('celular', 'Celular') }}                        
                        {{ Form::text('celular', $persona->celular, ['class'=>'smoothborder', 'required', 'placeholder'=>'Celular'] ) }} 
                    </div>
                </div>
            </fieldset>
	    </div>
    </div>
    <div class="row">
        <fieldset>
            <legend>Detalles</legend>
                <div class="twelve columns">
                	<div id="tabs">
                		<ul>
                            <li><a href="#tabs-1">Asignación</a></li>
                            <li><a href="#tabs-2">Experiencia Laboral</a></li>
                            <li><a href="#tabs-3">Ref. Personales</a></li>
                            <li><a href="#tabs-4">Funciones</a></li>
                            <li><a href="#tabs-5">Educación Formal</a></li>
                            <li><a href="#tabs-6">Educación Empresa</a></li>                                                  
                      	</ul>
	                	<div id="tabs-1">
	                		<h2>Asignación</h2>
	                		@if (count($asignacion)<=0)
	                			<p>
                                    <hr>
                                    <div class="row">
                                        <div class="twelve columns">
                                            <h3>No existe información para esta sección</h3>
                                        </div>
                                    </div>
                                </p>
	                		@else
	                		@foreach ($asignacion as $asigna)
	                            <p>
	                                <hr>
	                                <div class="row">
	                                    <div class="six columns">
	                                    	{{ Form::label('empresa', 'Nom. Empresa')}} 	                                    	                   
	                        				{{ Form::text('empresa', $asigna->nombre_empresa, ['class'=>'smoothborder', 'required', 'placeholder'=>'Nom. Empresa'] ) }}
	                                    </div>
	                                    <div class="six columns">
	                                        {{ Form::label('cargo', 'Cargo')}} 	                                    	                   
	                        				{{ Form::text('cargo', $asigna->descripcion_cargo, ['class'=>'smoothborder', 'required', 'placeholder'=>'Cargo'] ) }}
	                                    </div>
	                                    <div class="row">
	                                        <div class="three columns">
		                                        {{ Form::label('ingreso', 'F. Ingreso')}} 	                                    	                   
		                        				{{ Form::date('ingreso', $asigna->fecha_ini, ['class'=>'smoothborder', 'required'] ) }}
	                                        </div>
	                                        <div class="three columns">
	                                        	{{ Form::label('retiro', 'F. Retiro')}} 	                                    	                   
		                        				{{ Form::date('retiro', $asigna->fecha_fin, ['class'=>'smoothborder', 'required'] ) }}	                                            
	                                        </div>
	                                        <div class="three columns">
	                                        	{{ Form::label('estado', 'Estado')}} 
	                                        	@if ($asigna->activo == 'S')
		                        					{{ Form::checkbox('estado', $asigna->activo, True ) }}     
	                        					@else                       	                   	
		                        					{{ Form::checkbox('estado', $asigna->activo) }}     
                        	                   	@endif	                                    	                   
	                                        </div>
	                                         <div class="three columns">
	                                         </div>
	                                    </div>
	                                </div>                                
	                            </p>
                            @endforeach
                            @endif
	                	</div>
	                	<div id="tabs-2">
	                		<h2>Experiencia Laboral</h2>
	                		@if (count($experiencia_laboral)<=0)
	                			<p>
                                    <hr>
                                    <div class="row">
                                        <div class="twelve columns">
                                            <h3>No existe información para esta sección</h3>
                                        </div>
                                    </div>
                                </p>
	                		@else
	                		@foreach ($experiencia_laboral as $exp_lab)
								<p>
                                	<hr>
	                                <div class="row">
	                                    <div class="six columns">
	                                    	{{ Form::label('empresa', 'Nom. Empresa')}} 	                                    	                   
	                        				{{ Form::text('empresa', $exp_lab->nombre_empresa, ['class'=>'smoothborder', 'required', 'placeholder'=>'Nom. Empresa'] ) }}
	                                    </div>
	                                    <div class="six columns">
	                                    	{{ Form::label('cargo', 'Cargo')}} 	                                    	                   
	                        				{{ Form::text('cargo', $exp_lab->descripcion_cargo, ['class'=>'smoothborder', 'required', 'placeholder'=>'Cargo'] ) }}
	                                    </div>
	                                    <div class="four columns">
	                                    	{{ Form::label('jefe', 'Jefe Inmediato')}} 	                                    	                   
	                        				{{ Form::text('jefe', $exp_lab->jefe_inmediato, ['class'=>'smoothborder', 'required', 'placeholder'=>'Jefe Inmediato'] ) }}
	                                    </div>
	                                    <div class="two columns">
	                                    	{{ Form::label('tel', 'Tel. Contacto')}} 	                                    	                   
	                        				{{ Form::text('tel', $exp_lab->telcontacto, ['class'=>'smoothborder', 'required', 'placeholder'=>'Tel. Contacto'] ) }}
	                                    </div>
	                                    <div class="two columns">
	                                    	{{ Form::label('ext', 'Ext.')}} 	                                    	                   
	                        				{{ Form::text('ext', $exp_lab->extension, ['class'=>'smoothborder', 'required', 'placeholder'=>'Ext.'] ) }}
	                                    </div>
	                                    <div class="two columns">
	                                    	{{ Form::label('ingreso', 'F. Ingreso')}} 	                                    	                   
	                        				{{ Form::text('ingreso', $exp_lab->fecha_ingreso, ['class'=>'smoothborder', 'required'] ) }}
	                                    </div>
	                                    <div class="two columns">
	                                    	{{ Form::label('retiro', 'F. Retiro')}} 	                                    	                   
	                        				{{ Form::text('retiro', $exp_lab->fecha_retiro, ['class'=>'smoothborder', 'required'] ) }}
	                                    </div>
	                                </div>                                
	                            </p>
	                		@endforeach							
							@endif
	                	</div>
	                	<div id="tabs-3">
	                		<h2>Referencias Personales</h2>
	                		@if (count($referencias)<=0)
	                			<p>
                                    <hr>
                                    <div class="row">
                                        <div class="twelve columns">
                                            <h3>No existe información para esta sección</h3>
                                        </div>
                                    </div>
                                </p>
	                		@else
	                			@foreach ($referencias as $referencia)
									<p>
		                                <hr>
		                                <div class="row">
		                                    <div class="six columns">
			                                    {{ Form::label('nom_referencia', 'Nombre')}} 	                                    	                   
		                        				{{ Form::text('nom_referencia', $referencia->nombre_ref, ['class'=>'smoothborder', 'required', 'placeholder'=>'Nombre'] ) }}
		                                    </div>
		                                    <div class="six columns">
		                                    	{{ Form::label('parentesco', 'Parentesco')}} 	                                    	                   
		                        				{{ Form::text('parentesco', (is_null($referencia->parentesco)?'No Aplica':$referencia->parentesco ) , ['class'=>'smoothborder', 'required', 'placeholder'=>'Parentesco'] ) }}
		                                    </div>
		                                    <div class="four columns">
		                                    	{{ Form::label('dir_referencia', 'Dirección')}} 	                                    	                   
		                        				{{ Form::text('dir_referencia', $referencia->direccion_ref, ['class'=>'smoothborder', 'required', 'placeholder'=>'Dirección'] ) }}
		                                    </div>
		                                    <div class="two columns">
		                                    	{{ Form::label('tip_referencia', 'Tipo Referencia',['style'=>'font-size: 11px;'])}} 	  
		                                    	{{ Form::select('tip_referencia', ['P'=>'Personal','F'=>'Familiar'], $referencia->tipo_referencia, ['class'=>'smoothborder', 'required'] ) }}  
		                                    </div>
		                                    <div class="two columns">
		                                    	{{ Form::label('tel_referencia', 'Teléfono')}} 	                                    	                   
		                        				{{ Form::text('tel_referencia', $referencia->telefono_ref, ['class'=>'smoothborder', 'required', 'placeholder'=>'Teléfono'] ) }}
		                                    </div>
		                                    <div class="two columns">
		                                    	{{ Form::label('cel_referencia', 'Celular')}} 	                                    	                   
		                        				{{ Form::text('cel_referencia', $referencia->celular_ref, ['class'=>'smoothborder', 'required', 'placeholder'=>'Celular'] ) }}
		                                    </div>                                    
		                                </div>                                
		                            </p>
	                			@endforeach
	                		@endif
	                	</div>
	                	<div id="tabs-4">
	                		<h2>Funciones</h2>
                            <p>
                                <hr>
                                <div class="row">
                                    <div class="twelve columns">
                                        <h3>No existe información para esta sección</h3>
                                    </div>
                                </div>
                            </p>
	                	</div>
	                	<div id="tabs-5">
	                		<h2>Educación Formal</h2>
	                		@if (count($educa_formal)<=0)
	                			<p>
                                    <hr>
                                    <div class="row">
                                        <div class="twelve columns">
                                            <h3>No existe información para esta sección</h3>
                                        </div>
                                    </div>
                                </p>
	                		@else
	                			@foreach ($educa_formal as $educa_f)
									<p>
		                                <hr>
		                                <div class="row">
		                                    <div class="six columns">
		                                    	{{ Form::label('institucion', 'Nom. Institución')}} 	                                    	                   
		                        				{{ Form::text('institucion', $educa_f->nombre_empresa, ['class'=>'smoothborder', 'required', 'placeholder'=>'Nom. Institución'] ) }}
		                                    </div>
		                                    <div class="six columns">
		                                    	{{ Form::label('tipo_form', 'Tip. Formación')}} 	                                    	                   
		                        				{{ Form::text('tipo_form', $educa_f->valor_definicion, ['class'=>'smoothborder', 'required', 'placeholder'=>'Tip. Formación'] ) }}
		                                    </div>
		                                    <div class="six columns">
		                                    	{{ Form::label('tipo_form', 'Titulo Profesional')}} 	                                    	                   
		                        				{{ Form::text('tipo_form', $educa_f->titulo_profesional, ['class'=>'smoothborder', 'required', 'placeholder'=>'Titulo Profesional'] ) }}
		                                    </div>
		                                    <div class="four columns">
		                                    	{{ Form::label('titulo_profesional', 'Titulo Obtenido')}} 	                                    	                   
		                        				{{ Form::text('titulo_profesional', $educa_f->titulo_obtenido, ['class'=>'smoothborder', 'required', 'placeholder'=>'Titulo Profesional'] ) }}
		                                    </div>
		                                    <div class="two columns">
		                                    	{{ Form::label('anyo_egresado', 'Año Egresado')}} 	                                    	                   
		                        				{{ Form::text('anyo_egresado', $educa_f->anyo_egresado, ['class'=>'smoothborder', 'required', 'placeholder'=>'Año Egresado'] ) }}
		                                    </div>                                    
		                                </div>                                
		                            </p>
	                			@endforeach
	                		@endif
	                	</div>
	                	<div id="tabs-6">
	                		<h2>Educación Empresa</h2>
	                		@if (count($educa_emp)<=0)
	                			<p>
                                    <hr>
                                    <div class="row">
                                        <div class="twelve columns">
                                            <h3>No existe información para esta sección</h3>
                                        </div>
                                    </div>
                                </p>
	                		@else
								<table class="table table-bordered" style="width: 100%;">                                    
                                <tr>
                                    <th>Nombre del Curso</th>
                                    <th>Nota</th>   
                                    <th>Calificación</th>   
                                </tr>  
	                			@foreach ($educa_emp as $educa_e)
	                			<tr>
                                    <td>{{ $educa_e->nombre_curso  }}</td> 
                                    <td style="text-align:center">
                                    @if( is_null($educa_e->aprobado) || $educa_e->aprobado == '' )
                                    	- 
                                	@else 
										{{ number_format($educa_e->aprobado, 2,'.',',' ) }}
                                	@endif 
                                	</td> 
                                    <td style="text-align:center">
                                    @if (is_null($educa_e->aprobado) || $educa_e->aprobado == '' )
                                    	En progreso
                                	@else
                                		{{ ($educa_e->aprobado < 4 )?'Reprobó': 'Aprobó' }}
                                    @endif                                    
                                    </td> 
                                </tr>
	                			@endforeach
	                			</table>
	                		@endif
	                	</div>
                	</div>
                </div>
        </fieldset>
    </div>
	<a class="btn btn-danger pull-right" href="{{ route('admin.users.index') }}" role="button">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp;Volver
	</a>
</div>	
@endsection()
