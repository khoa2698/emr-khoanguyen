<?php

namespace App\Repository\src\Contracts;

interface RepositoryInterface
{
    public function all ($columns = array('*'));
    public function paginate($perPage = 15, $columns = array('*'));
}
