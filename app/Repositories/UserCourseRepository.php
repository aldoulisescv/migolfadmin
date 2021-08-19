<?php

namespace App\Repositories;

use App\Models\UserCourse;
use App\Repositories\BaseRepository;

/**
 * Class UserCourseRepository
 * @package App\Repositories
 * @version August 16, 2021, 6:01 pm UTC
*/

class UserCourseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'tee_default_male',
        'tee_default_female'
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
        return UserCourse::class;
    }
}
