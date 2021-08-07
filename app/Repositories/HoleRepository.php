<?php

namespace App\Repositories;

use App\Models\Hole;
use App\Repositories\BaseRepository;

/**
 * Class HoleRepository
 * @package App\Repositories
 * @version August 7, 2021, 6:57 pm UTC
*/

class HoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hole_number',
        'start_id',
        'par',
        'lead'
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
        return Hole::class;
    }
}
