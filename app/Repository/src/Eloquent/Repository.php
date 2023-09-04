<?php

namespace App\Repository\src\Eloquent;

use App\Repository\src\Contracts\RepositoryInterface;
use App\Repository\src\Exceptions\RepositoryException;
use Illuminate\Contracts\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface
{
    /**
     * @var App
     */
    private $app;
 
    /**
     * @var
     */
    protected $model;
    
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

     /**
     * Specify Model class name
     * 
     * @return mixed
     */
    abstract function model();

    /**
     * @return Model
     * @throws RepositoryException
     */
    public function makeModel() {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
 
        return $this->model = $model;
    }

    public function all ($columns = array('*'))
    {
        return $this->model->get($columns);
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns)->withQueryString();
    }
}
