<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorDefinicion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'valores_definiciones';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_valor_def';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_valor_def','id_tipo_definicion','valor_definicion','desc_valor_def','tipo_valor_def','activo'];
}
