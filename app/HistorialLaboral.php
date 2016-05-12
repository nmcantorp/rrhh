<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialLaboral extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'historial_laboral';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_historial_lab';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_historial_lab','id_persona','id_organizacion','id_cargo','id_tipo_departamento','fecha_ingreso','fecha_retiro','salario_devengado','jefe_inmediato','id_cargo_jefe','id_tipo_depto_jefe','telcontacto','extension'];
}
