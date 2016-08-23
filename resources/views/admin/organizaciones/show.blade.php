@extends('layouts.app')

@section('content')
    @include('admin.organizaciones.show_fields')

    <div class="form-group">
           <a href="{!! route('admin.organizaciones.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
