<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudioRealzado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estudios_realzados';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_estudio_realizado';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_estudio_realizado','id_organizacion','id_titulo_profesional','id_tipo_formacion','fecha_ingreso','fecha_egresado','semeste_cursado','estado','fecha_creacion','id_persona','anyo_egresado','titulo_obtenido','descripcion_titulo'];
}
