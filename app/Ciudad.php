<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Ciudades';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_ciudad';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ciudad','nombre_ciudad','cod_postal','id_departamento','fecha_creacion'];
}
