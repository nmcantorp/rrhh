@extends('layouts.app')
@section('subtitle', 'Crear país')
@section('content')
    @include('core-templates::common.errors')
    <div class="row">
        <hr>
        {!! Form::open(['route' => 'admin.paises.store']) !!}

            @include('paises.fields')

        {!! Form::close() !!}
    </div>
@endsection
