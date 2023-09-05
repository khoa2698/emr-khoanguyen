<?php

namespace App\Repository\Criteria;

use App\Repository\src\Eloquent\Repository;

abstract class Criteria
{
    abstract function apply ($model, Repository $repository);
}
