<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionLaboral extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'AsignacionLaboral';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_asignacion_lab';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_asignacion_lab','id_control_contrato','id_cargo','id_tipo_departamento','activo','id_sucursal','fecha_ini','fecha_fin','id_persona'];
}
