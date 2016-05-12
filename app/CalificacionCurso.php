<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalificacionCurso extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'calificaciones_curso';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_calificacion_curso';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_calificacion_curso','id_matricula','id_titulo_profesional','id_nota_calificacion','aprobo_curso','fecha_creacion'];
}
