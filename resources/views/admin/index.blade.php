@extends('layouts.app')
@section('subtitle', 'Lista de usuarios')
@section('add_stylesheet')
<link rel="stylesheet" href="{{ asset('css/sialen.css') }}" type="text/css" />
@endsection()
@section('content')
<div class="row content">
    <div class="row">
    <hr>
		{{ $personas->Render() }}
		<div class="btn-group" role="group" aria-label="...">
		  <a href=" {{ route('admin.users.create') }} " class="btn btn-default">Nuevo Usuario</a>
		</div>
	    <table class="table table-bordered table-hover">
    		<tr>
				<th colspan="" rowspan="" headers="" scope="">D.N.I.</th>
				<th colspan="" rowspan="" headers="" scope="">Nombres</th>
				<th colspan="" rowspan="" headers="" scope="">Genero</th>
				<th colspan="" rowspan="" headers="" scope="">F. Nacimiento</th>
				<th colspan="" rowspan="" headers="" scope="">Email</th>
				<th colspan="" rowspan="" headers="" scope=""></th>
			</tr>
			@foreach ($personas as $element)
				<tr>
					<td>{{ $element->doc_identidad }}</td>
					<td>{{ $element->nombre_completo }}</td>
					<td>
					@if ($element->genero == 'M')
						Masculino
					@else 
						Femenino
					@endif
					</td>
					<td>{{ $element->fecha_nac }}</td>
					<td>{{ $element->email }}</td>
					<td> <div class="btn-group">
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> 
						  </button>
						  <ul class="dropdown-menu">
						    <li><a href=" {{ route('admin.users.show', $element->id_persona ) }} ">Ver Detalle</a></li>
						    {{-- <li><a href="#">Another action</a></li>
						    <li><a href="#">Something else here</a></li> --}}						    
						  </ul>
						</div>
					</td>
				</tr>
			@endforeach
		</table>

		</div>
    </div>
</div>

@endsection()

