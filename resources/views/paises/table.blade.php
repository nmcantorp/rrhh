<table class="table table-responsive" id="paises-table">
    <thead>
        <th>Nombre Pais</th>
        <th>Cod Postal</th>
        <th style="text-align:right;">Action</th>
    </thead>
    <tbody>
    @foreach($paises as $paises)
        <tr>
            <td>{!! $paises->nombre_pais !!}</td>
            <td>{!! $paises->cod_postal !!}</td>
            <td style="text-align:right;">
                {!! Form::open(['route' => ['admin.paises.destroy', $paises->id_pais], 'method' => 'get']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.paises.show', [$paises->id_pais]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.paises.edit', [$paises->id_pais]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
