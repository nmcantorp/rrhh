@extends('layouts.app')
@section('subtitle', 'Organizaciones')
@section('content')
<div class="row content">
    <div class="row">
        <!-- Buscador -->
        {{ Form::open(['route'=>'admin.organizaciones.index', 'method' => 'GET', 'class'=>'navbar-form pull-right']) }}
        <div class="form-group">
            {{ Form::text('buscar', null, ['class'=>'form-control', 'placeholder'=>'Buscar Persona', 'style'=>'margin: 0 !important;']) }}
            {{ Form::button('Buscar',['class'=>'btn btn-default', 'type'=>'submit']) }}
        </div>
        {{ Form::close() }}
    <!-- fin buscador -->
    <hr>
    	{{ $organizaciones->Render() }}
		<div class="btn-group" role="group" aria-label="..." style="float:right;">
		  	<a href=" {{ route('admin.organizaciones.create') }} " class="btn btn-default">Nueva Organización</a>
		</div>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('admin.organizaciones.table')
	</div>
</div>
@endsection
