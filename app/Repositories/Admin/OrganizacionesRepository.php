<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Organizaciones;
use InfyOm\Generator\Common\BaseRepository;

class OrganizacionesRepository extends BaseRepository
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
        return Organizaciones::class;
    }
}
