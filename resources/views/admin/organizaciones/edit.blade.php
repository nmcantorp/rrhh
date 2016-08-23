@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Organizaciones</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($organizaciones, ['route' => ['admin.organizaciones.update', $organizaciones->id], 'method' => 'patch']) !!}

            @include('admin.organizaciones.fields')

            {!! Form::close() !!}
        </div>
@endsection
