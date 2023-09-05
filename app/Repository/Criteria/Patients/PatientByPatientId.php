<?php

namespace App\Repository\Criteria\Patients;

use App\Repository\Criteria\Criteria;
use App\Repository\src\Contracts\CriteriaInterface;
use App\Repository\src\Eloquent\Repository;

class PatientByPatientId extends Criteria
{
    private $patient_id;

    public function __construct($patient_id = '')
    {
        $this->patient_id = $patient_id;
    }
    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $query = $model->where('patient_id', $this->patient_id);
        return $query;
    }
}
