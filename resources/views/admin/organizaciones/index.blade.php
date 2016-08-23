@extends('layouts.app')
@section('subtitle', 'Organizaciones')
@section('content')
<div class="row content">
    <div class="row">
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
