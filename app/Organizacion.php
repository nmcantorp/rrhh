<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'organizaciones';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_organizacion';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_organizacion','id_organizacion_padre','id_sec_financiero','nit_empresa','nombre_empresa','direccion','telefono_pbx','web_site','sigla','anyo_fundacion','clasificacion'];

    public function scopeSearch($query, $search)
    {
        if($search!='' && !is_null($search))
        {
            return $query->where('nit_empresa', 'like', "%$search%")
                ->orWhere('nombre_empresa', 'like', "%$search%")
                ->orWhere('sigla', 'like', "%$search%");
        }
    }
}
