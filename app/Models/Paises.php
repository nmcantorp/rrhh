<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Paises",
 *      required={""},
 *      @SWG\Property(
 *          property="id_pais",
 *          description="id_pais",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombre_pais",
 *          description="nombre_pais",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cod_postal",
 *          description="cod_postal",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="usuario_creador",
 *          description="usuario_creador",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="usuario_modificador",
 *          description="usuario_modificador",
 *          type="string"
 *      )
 * )
 */
class Paises extends Model
{
    use SoftDeletes;

    public $table = 'paises';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id_pais';

    public $fillable = [
        'nombre_pais',
        'cod_postal',
        'fecha_creacion',
        'usuario_creador',
        'fecha_modificacion',
        'usuario_modificador'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_pais' => 'integer',
        'nombre_pais' => 'string',
        'cod_postal' => 'integer',
        'fecha_creacion' => 'datetime',
        'usuario_creador' => 'string',
        'fecha_modificacion' => 'datetime',
        'usuario_modificador' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
