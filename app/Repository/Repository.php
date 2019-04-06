<?php

namespace HomeStore\Repository;

use HomeStore\Models\Roles;
use HomeStore\Models\Users;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Model;

class Repository
{

    public $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->get();
    }

    public function with(array $relations)
    {
        $this->model = $this->Role::with($relations);
        return $this;
    }

    public function paginate($perPage = 25, $columns = array('*'))
    {
        return $this->model::paginate($perPage, $columns);
    }

    public function create(array $data)
    {
        return $this->model->fill($data);
    }

    public function saveModel(Model $model)
    {
      return  $model->save();
    }

    public function save()
    {
        return $this->model->save();
    }

    public function update(array $data, $id, $attribute = "id")
    {
        return $this->model::where($attribute, '=', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model::destroy($id);
    }

    public function find($id, $columns = array('*'))
    {
        return $this->model::find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*'))
    {
        return $this->model::where($attribute, '=', $value)->first($columns);
    }

    public function findAllBy($attribute, $value, $columns = array('*'))
    {
        return $this->model::where($attribute, '=', $value)->get($columns);
    }


    public function findWhere($where, $columns = ['*'], $or = false)
    {
        $model = $this->model;
        foreach ($where as $field => $value) {
            if ($value instanceof \Closure) {
                $model = (!$or)
                    ? $model->where($value)
                    : $model->orWhere($value);
            } elseif (is_array($value)) {
                if (count($value) === 3) {
                    list($field, $operator, $search) = $value;
                    $model = (!$or)
                        ? $model->where($field, $operator, $search)
                        : $model->orWhere($field, $operator, $search);
                } elseif (count($value) === 2) {
                    list($field, $search) = $value;
                    $model = (!$or)
                        ? $model->where($field, '=', $search)
                        : $model->orWhere($field, '=', $search);
                }
            } else {
                $model = (!$or)
                    ? $model->where($field, '=', $value)
                    : $model->orWhere($field, '=', $value);
            }
        }
        return $model->get($columns);
    }

//    public function setModel($eloquentModel)
//    {
//        $this->newModel = $this->app->make($eloquentModel);
//        if (!$this->newModel instanceof Model)
//            throw new RepositoryException("Class {$this->newModel} must be an instance of Illuminate\\Database\\Eloquent\\Model");
//        return $this->model = $this->newModel;
//    }

}