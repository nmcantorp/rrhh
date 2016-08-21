<option value="">--Selecciona Empresa--</option>}
option
@foreach ($parents as $parent)
	<option value="{{ $parent->id_valor_def }}">{{ $parent->valor_definicion }}</option>
@endforeach