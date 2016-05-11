<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedenteLaboral extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'AntecedenteLaboral';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_antecedente';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_antecedente','id_persona','id_tipo_antecedente','fecha_antecedente','observacion','compromiso_per'];
}
