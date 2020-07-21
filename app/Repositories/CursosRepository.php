<?php

namespace App\Repositories;

use App\Models\Cursos;
use App\Repositories\BaseRepository;

/**
 * Class CursosRepository
 * @package App\Repositories
 * @version July 21, 2020, 3:57 am UTC
*/

class CursosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cursos::class;
    }
}
