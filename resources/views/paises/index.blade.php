@extends('layouts.app')
@section('subtitle', 'Paises')
@section('content')
<div class="row content">
    <div class="row">
    <hr>
		{{ $paises->Render() }}
        <div class="btn-group" role="group" aria-label="..." style="float: right;">
          <a href=" {{ route('admin.paises.create') }} " class="btn btn-default">Nuevo País</a>
        </div>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('paises.table')
    </div>
</div>
@endsection
