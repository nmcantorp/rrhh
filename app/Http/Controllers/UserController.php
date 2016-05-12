<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Persona;
use App\Ciudad;

class UserController extends Controller
{
    public function index()
    {
    	$personas = Persona::orderBy('id_persona','ASC')->paginate(5);

    	return view('admin.index')->with('personas', $personas);
    }

    public function show($id)
    {
    	$persona 	= Persona::find($id);
    	$ciudad 	= Ciudad::orderBy('nombre_ciudad','ASC')->lists('nombre_ciudad', 'id_ciudad');

    	/* Informacion del tab1 -> asignacion laboral */

    	$asignacion = DB::table('asignacion_laboral')
    						->join('organizaciones', 'asignacion_laboral.id_sucursal', '=', 'organizaciones.id_organizacion' )
    						->join('cargos', 'cargos.id_cargo', '=', 'asignacion_laboral.id_cargo' )
    						->leftJoin('valores_definiciones', 'valores_definiciones.id_valor_def', '=', 'asignacion_laboral.id_tipo_departamento' )
    						->where([
    							['asignacion_laboral.id_persona', $id],
								['valores_definiciones.id_tipo_definicion','12']
								])
    						->groupBy('asignacion_laboral.id_asignacion_lab')
    						->get();

		/* Informacion del tab2 -> Experiencia laboral */
		$experiencia_laboral = DB::table('historial_laboral')
    							->join('organizaciones', 'organizaciones.id_organizacion', '=', 'historial_laboral.id_organizacion' )
    							->join('cargos', 'cargos.id_cargo', '=', 'historial_laboral.id_cargo' )
    							->where('historial_laboral.id_persona', $id)
    							->orderby('historial_laboral.fecha_ingreso','desc')
    							->orderby('historial_laboral.fecha_retiro','desc')
    							->get();

		/* Información del tab3 -> Referencias personales */
		$referencias = DB::table('referencias_personales')
							->leftJoin('valores_definiciones as A', 'A.id_valor_def','=','referencias_personales.tipo_referencia')
							->leftJoin('valores_definiciones as B', 'B.id_valor_def','=','referencias_personales.id_tipo_parentesco')
							->where('referencias_personales.id_persona', $id)
							->select('referencias_personales.*',
									 'B.valor_definicion as parentesco',
									 'A.valor_definicion as tipo_referencias')
							->get();

		/* Informacion del tab 5 -> Eduacion formal */
		$educa_formal = DB::table('estudios_realzados')
							->leftJoin('organizaciones', 'organizaciones.id_organizacion','=','estudios_realzados.id_organizacion')
							->leftJoin('titulos_profesionales', 'titulos_profesionales.id_titulo_profesional','=','estudios_realzados.id_titulo_profesional')
							->leftJoin('valores_definiciones', 'valores_definiciones.id_valor_def','=','estudios_realzados.id_tipo_formacion')
							->where('estudios_realzados.id_persona', $id)
							->get();

		$educa_emp	  = DB::table('cursos_ofertados')
							->join('matricula_curso_persona','matricula_curso_persona.id_curso','=','cursos_ofertados.id_curso')
							->leftJoin('calificaciones_curso','calificaciones_curso.id_matricula','=','matricula_curso_persona.id_matricula')
							->where('matricula_curso_persona.id_persona', $id)
							->get();

    	return view('admin.show')
    							->with('persona',$persona)
    							->with('ciudad',$ciudad)
    							->with('asignacion',$asignacion)
    							->with('experiencia_laboral',$experiencia_laboral)
    							->with('referencias',$referencias)
    							->with('educa_formal',$educa_formal)
    							->with('educa_emp',$educa_emp)
    							;
    }
}
