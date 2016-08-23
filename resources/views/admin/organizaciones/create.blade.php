@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Organizaciones</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'admin.organizaciones.store']) !!}

            @include('admin.organizaciones.fields')

        {!! Form::close() !!}
    </div>
@endsection
