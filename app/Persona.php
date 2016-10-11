<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Persona extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_persona';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_persona','doc_identidad','fecha_nac','primer_nom','segundo_nom','primer_ape','segundo_ape','nombre_completo','genero','id_departamento','id_ciudad','telefono','celular','direccion','email','activo','foto','id_plat_virtual','username'];


    public function scopeSearch($query, $search)
    {
        if($search!='' && !is_null($search))
        {
            return $query->where('doc_identidad', 'like', "%$search%")
                ->orWhere('primer_nom', 'like', "%$search%")
                ->orWhere('segundo_nom', 'like', "%$search%")
                ->orWhere('primer_ape', 'like', "%$search%")
                ->orWhere('segundo_ape', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%");
        }
    }
}
