<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferenciaPersonal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Referencias_Personales';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_ref_personal';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ref_personal','id_persona','tipo_referencia','nombre_ref','telefono_ref','celular_ref','direccion_ref','id_tipo_parentesco','activo'];
}
