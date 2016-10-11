@extends('layouts.app')
@section('subtitle', 'Creación de Organizaciones')
@section('content')

    @include('core-templates::common.errors')

    <div class="row content">
        <div class="row">
            <hr>
            <a class="btn btn-danger pull-right" href="{{ route('admin.organizaciones.index') }}" role="button">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp;Volver
            </a>
            <div class="twelve columns" >
                <fieldset>
                {!! Form::open(['route' => 'admin.organizaciones.store']) !!}

                    @include('admin.organizaciones.fields')
                </fieldset>
                {!! Form::submit('Guardar', ['class' => 'btn btn-success', 'style'=>"float: right;"]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
