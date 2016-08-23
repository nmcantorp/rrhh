<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Organizaciones",
 *      required={""},
 *      @SWG\Property(
 *          property="id_organizacion",
 *          description="id_organizacion",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_organizacion_padre",
 *          description="id_organizacion_padre",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_sec_financiero",
 *          description="id_sec_financiero",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nit_empresa",
 *          description="nit_empresa",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nombre_empresa",
 *          description="nombre_empresa",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="direccion",
 *          description="direccion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="telefono_pbx",
 *          description="telefono_pbx",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="web_site",
 *          description="web_site",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sigla",
 *          description="sigla",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="anyo_fundacion",
 *          description="anyo_fundacion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="clasificacion",
 *          description="clasificacion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="usuario_creador",
 *          description="usuario_creador",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fecha_creador",
 *          description="fecha_creador",
 *          type="string"
 *      )
 * )
 */
class Organizaciones extends Model
{
    use SoftDeletes;

    public $table = 'organizaciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id_organizacion';

    public $fillable = [
        'id_organizacion_padre',
        'id_sec_financiero',
        'nit_empresa',
        'nombre_empresa',
        'direccion',
        'telefono_pbx',
        'web_site',
        'sigla',
        'anyo_fundacion',
        'clasificacion',
        'fecha_creacion',
        'usuario_creador',
        'fecha_modificacion',
        'fecha_creador'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_organizacion' => 'integer',
        'id_organizacion_padre' => 'integer',
        'id_sec_financiero' => 'integer',
        'nit_empresa' => 'string',
        'nombre_empresa' => 'string',
        'direccion' => 'string',
        'telefono_pbx' => 'string',
        'web_site' => 'string',
        'sigla' => 'string',
        'anyo_fundacion' => 'string',
        'clasificacion' => 'string',
        'fecha_creacion' => 'datetime',
        'usuario_creador' => 'string',
        'fecha_modificacion' => 'datetime',
        'fecha_creador' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
