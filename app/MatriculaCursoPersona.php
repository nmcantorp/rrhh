<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatriculaCursoPersona extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matricula_curso_persona';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_matricula,id_persona,id_curso';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_matricula','id_persona','id_curso','fecha_matricula','estado_matricula','aprobado','fecha_creacion'];
}
