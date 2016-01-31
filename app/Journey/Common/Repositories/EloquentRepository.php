<?php

namespace App\Journey\Common\Repositories;

abstract class EloquentRepository
{
    /**
     * @param $id
     * @param array|null $with
     * @return mixed
     */
    public function find($id, $with = [])
    {
        return $this->model->with($with)->findOrFail($id);
    }
    /**
     * @param array $attr
     * @return mixed
     */
    public function save($attr = [])
    {
        $model = new $this->model;
        $model->fill($attr);
        $model->save();
        return $model;
    }
    /**
     * @param $id
     * @param array $attr
     */
    public function update($id, $attr = [])
    {
        $this->model->where('id', $id)->update($attr);
    }
    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $this->model->destroy($id);
    }
}
