@extends('layouts.app')
@section('subtitle', 'Detalle país')
@section('content')
<div class="row content">
    <div class="row">
    <hr>
    @include('paises.show_fields')

    <div class="form-group">
           <a href="{!! route('admin.paises.index') !!}" class="btn btn-default">Back</a>
    </div>
    </div>
</div>
@endsection
