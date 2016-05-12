<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoOfertado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cursos_ofertados';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_curso';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_curso','id_area_conocimiento','nombre_curso','cupos_disponibles','duracion','fecha_ini_curso','fecha_fin_curso','activo','observaciones'];
}
