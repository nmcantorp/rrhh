<?php

namespace App\Repositories;

use App\Models\Paises;
use InfyOm\Generator\Common\BaseRepository;

class PaisesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Paises::class;
    }
}
