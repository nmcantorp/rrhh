<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cargos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_cargo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cargo','descripcion_cargo','observaciones','activo'];
}
