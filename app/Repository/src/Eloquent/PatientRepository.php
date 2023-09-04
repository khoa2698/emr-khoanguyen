<?php

namespace App\Repository\src\Eloquent;

use App\Models\Patient;

class PatientRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return Patient::class;
    }
}
