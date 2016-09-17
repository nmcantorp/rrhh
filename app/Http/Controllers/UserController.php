<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Persona;
use App\Ciudad;
use App\Cargo;
use App\Organizacion;
use App\HistorialLaboral;
use App\Valordefinicion;
use App\ReferenciaPersonal;
use App\TituloProfesional;
use App\EstudioRealzado;

class UserController extends Controller
{
    public function index()
    {
    	$personas = Persona::orderBy('id_persona','ASC')->paginate(10);

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

    public function create(){

        $ciudad = Ciudad::orderBy('nombre_ciudad','ASC')->lists('nombre_ciudad', 'id_ciudad');

        return view('admin.create')->with('ciudad',$ciudad);
    }

    public function store(Request $request)
    {
        $persona = new Persona($request->all());
        $ciudad  = Ciudad::find($request->all()['ciudad']); 
        $persona->nombre_completo = $persona->primer_nom." ".$persona->segundo_nom." ".$persona->primer_ape." ".$persona->segundo_ape;
        $persona->id_ciudad = $ciudad->id_ciudad;
        $persona->id_departamento = $ciudad->id_departamento;
        $persona->save();

        return redirect()->route('admin.users.step2', [$persona->id_persona]);
    }

    public function step2($id_persona)
    {
        $cargo = Cargo::orderBy('descripcion_cargo','ASC')->lists('descripcion_cargo', 'id_cargo');
        $empresa = Organizacion::orderBy('nombre_empresa','ASC')->lists('nombre_empresa', 'id_organizacion');
        return view('admin.step2')->with('persona', $id_persona)
                                ->with('cargo', $cargo)
                                ->with('empresa', $empresa);
    }

    public function step2save(Request $request)
    {
        $id_persona = $request->all()['id_persona'];
        for ($i=0; $i < count($request->empresa); $i++) { 
            $historiaLab = new HistorialLaboral($request->all());
            $historiaLab->id_persona        = $id_persona;
            $historiaLab->id_organizacion   = $request->empresa[$i];
            $historiaLab->id_cargo          = $request->cargo[$i];
            $historiaLab->fecha_ingreso     = $request->ingreso[$i];
            $historiaLab->fecha_retiro      = $request->retiro[$i];
            $historiaLab->jefe_inmediato    = $request->jefe[$i];
            $historiaLab->telcontacto       = $request->tel[$i];
            $historiaLab->extension         = $request->ext[$i];
            $historiaLab->save();
        }
        return redirect()->route('admin.users.step3', [$id_persona]);
    }

    public function step3($id_persona)
    {
        $cargo = Cargo::orderBy('descripcion_cargo','ASC')->lists('descripcion_cargo', 'id_cargo');
        $empresa = Organizacion::orderBy('nombre_empresa','ASC')->lists('nombre_empresa', 'id_organizacion');
        return view('admin.step3')->with('persona', $id_persona)
                                ->with('cargo', $cargo)
                                ->with('empresa', $empresa);
    }

    public function step3save(Request $request)
    {
        $id_persona = $request->all()['id_persona'];
        for ($i=0; $i < count($request->tipo_ref); $i++) { 
            $referenciaPersonal = new ReferenciaPersonal($request->all());
            $referenciaPersonal->id_persona        = $id_persona;
            $referenciaPersonal->tipo_referencia   = $request->tipo_ref[$i];
            $referenciaPersonal->nombre_ref        = $request->nombre_ref[$i];
            $referenciaPersonal->telefono_ref      = $request->tel[$i];
            $referenciaPersonal->celular_ref       = $request->cel[$i];
            $referenciaPersonal->direccion_ref     = $request->direccion[$i];
            $referenciaPersonal->id_tipo_parentesco= $request->parentesco[$i];
            $referenciaPersonal->activo            = "S";
            $referenciaPersonal->save();
        }
        return redirect()->route('admin.users.step4', [$id_persona]);
    }

    public function step4($id_persona)
    {
        $tipo_formacion = ValorDefinicion::where('tipo_valor_def','=','TIPO_FORMACION')
                                            ->lists('valor_definicion', 'id_valor_def');

        $area_conocimiento = ValorDefinicion::where('tipo_valor_def','=','AREAS_CONOCIMIENTO')
                                            ->lists('valor_definicion', 'id_valor_def');

        $cargo = Cargo::orderBy('descripcion_cargo','ASC')->lists('descripcion_cargo', 'id_cargo');
        $institucion = Organizacion::orderBy('nombre_empresa','ASC')
                                 ->where('id_sec_financiero','=','17')
                                 ->lists('nombre_empresa', 'id_organizacion');
        return view('admin.step4')->with('persona', $id_persona)
                                ->with('tipo_formacion', $tipo_formacion)
                                ->with('area_conocimiento', $area_conocimiento)
                                ->with('institucion', $institucion);
    }

    public function step4save(Request $request)
    {
        $id_persona = $request->all()['id_persona'];
        for ($i=0; $i < count($request->nombre_inst); $i++) { 
            $estudiosRealizados = new EstudioRealzado($request->all());
            $estudiosRealizados->id_persona        = $id_persona;
            $estudiosRealizados->id_organizacion   = $request->nombre_inst[$i];
            $estudiosRealizados->id_titulo_profesional= $request->titulo[$i];
            $estudiosRealizados->id_tipo_formacion = $request->tipo_for[$i];
            $estudiosRealizados->anyo_egresado    = $request->anio[$i];
            if(!is_null($request->anio[$i]))
                $estudiosRealizados->estado        = 'FINALIZADO';
            else
                $estudiosRealizados->estado        = 'EN CURSO';
            $estudiosRealizados->titulo_obtenido   = $request->titulo_obt[$i];
            $estudiosRealizados->save();
        }
        return redirect()->route('admin.users.show', [$id_persona]);
    }

    public function getParent($id_def)
    {
        $parents = ValorDefinicion::where('id_tipo_definicion','=',$id_def)
                                        ->select('valor_definicion','id_valor_def')
                                        ->get();
        return view('ajax.parents')->with('parents', $parents);
    }

    public function edit($id)
    {
        $user       = Persona::find($id);
        $ciudad     = Ciudad::orderBy('nombre_ciudad','ASC')->lists('nombre_ciudad', 'id_ciudad');
        return view('admin.edit')->with('user', $user)
                                ->with('ciudad',$ciudad);
    }

    public function update(Request $request, $id)
    {
        $user = Persona::find($id);
        $user->primer_nom = $request->primer_nom;
        $user->segundo_nom = $request->segundo_nom;
        $user->primer_ape = $request->primer_ape;
        $user->segundo_ape = $request->segundo_ape;
        $user->doc_identidad = $request->doc_identidad;
        $user->fecha_nac = $request->fecha_nac;
        $user->genero = $request->genero;
        $user->direccion = $request->direccion;
        $user->id_ciudad = $request->ciudad;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->celular = $request->celular;
        $user->save();
        return redirect()->route('admin.users.editstep2', [$id]);

    }

    public function editStep2($id)
    {
        $organizacion = DB::table('historial_laboral')
                            ->join('organizaciones', 'organizaciones.id_organizacion', '=', 'historial_laboral.id_organizacion' )
                            ->join('cargos', 'cargos.id_cargo', '=', 'historial_laboral.id_cargo' )
                            ->where('historial_laboral.id_persona', $id)
                            ->orderby('historial_laboral.fecha_ingreso','desc')
                            ->orderby('historial_laboral.fecha_retiro','desc')
                            ->get();

        $user    = Persona::find($id);
        $cargo   = Cargo::orderBy('descripcion_cargo','ASC')->lists('descripcion_cargo', 'id_cargo');
        $empresa = Organizacion::orderBy('nombre_empresa','ASC')->lists('nombre_empresa', 'id_organizacion');
        return view('admin.editstep2')->with('persona', $id)
                                ->with('cargo', $cargo)
                                ->with('empresa', $empresa)
                                ->with('organizacion', $organizacion);
    }

    public function updateStep2(Request $request, $id)
    {

    }
}
