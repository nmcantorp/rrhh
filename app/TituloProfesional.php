<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TituloProfesional extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'titulos_profesionales';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_titulo_profesional';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_titulo_profesional','id_area_conocimiento','titulo_profesional','desc_titulo_profesional','fecha_registro','activo'];
}
