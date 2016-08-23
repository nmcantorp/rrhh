<table class="table table-responsive" id="organizaciones-table">
    <thead>
        <th>Nit Empresa</th>
        <th>Nombre Empresa</th>
        <th>Direccion</th>
        <th>Telefono Pbx</th>
        <th>Web Site</th>
        <th>Sigla</th>
        <th>Anyo Fundacion</th>
        <th>Clasificacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($organizaciones as $organizaciones)
        <tr>
            <td>{!! $organizaciones->nit_empresa !!}</td>
            <td>{!! $organizaciones->nombre_empresa !!}</td>
            <td>{!! $organizaciones->direccion !!}</td>
            <td>{!! $organizaciones->telefono_pbx !!}</td>
            <td>{!! $organizaciones->web_site !!}</td>
            <td>{!! $organizaciones->sigla !!}</td>
            <td>{!! $organizaciones->anyo_fundacion !!}</td>
            <td>{!! $organizaciones->clasificacion !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.organizaciones.destroy', $organizaciones->id_organizacion], 'method' => 'get']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.organizaciones.show', [$organizaciones->id_organizacion]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.organizaciones.edit', [$organizaciones->id_organizacion]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
