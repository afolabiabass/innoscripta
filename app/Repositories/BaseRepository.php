<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 14/02/2019
 * Time: 1:41 PM
 */

namespace App\Repositories;

use App\Contracts\BaseContract;
use App\Entities\BaseEntity;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository implements BaseContract
{
    /**
     * @var App
     */
    protected $app;
    /**
     * @var BaseEntity
     */
    protected $model;
    /**
     * @var string
     */
    protected $order = 'id';
    /**
     * @var string
     */
    protected $direction = 'desc';
    /**
     * @var array
     */
    protected $with = [];

    /**
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    abstract protected function getClass(): string;

    protected function makeModel()
    {
        $this->model = $this->app->make($this->getClass());
    }

    /**
     * @param int   $limit
     * @param array $filters
     * @param bool  $simple
     *
     * @return \Illuminate\Contracts\Pagination\Paginator
     */
    public function pagination($limit = 10, $filters = [], $simple = true)
    {
        /** @var Builder $latest */
        $latest = $this->model->with($this->with);
        if ($this->order != '') {
            $latest->orderBy($this->order, $this->direction);
        }

        unset($filters['page']);
        $latest->where($filters);
        if ($simple) {
            return $latest->simplePaginate($limit);
        }

        return $latest->paginate($limit);
    }

    /**
     * @param array $filters
     *
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function get($filters = [])
    {
        /** @var Builder $latest */
        $latest = $this->model->where($filters);
        if ($this->order != '') {
            $latest->orderBy($this->order, $this->direction);
        }

        $latest->where($filters);

        return $latest->get();
    }

    /**
     * @param $entityId
     * @param array $attributes
     *
     * @return bool
     */
    public function update($entityId, $attributes = [])
    {
        $item = $this->model->where('id', $entityId);

        if ($item) {
            return $item->update($attributes);
        }

        return false;
    }

    /**
     * @param $entityId
     *
     * @throws \Exception
     *
     * @return bool
     */
    public function delete($entityId)
    {
        $item = $this->model->where('id', $entityId);

        if ($item && $item->delete()) {
            return true;
        }

        return false;
    }

    /**
     * @param array $attributes
     *
     * @return bool
     */
    public function insert($attributes = [])
    {
        return $this->model->insert($attributes);
    }

    /**
     * @param array $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function updateOrCreate($attributes = [])
    {
        return $this->model->updateOrCreate($attributes);
    }

    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function all($columns = ['*'])
    {
        return $this->model->get($columns);
    }

    /**
     * @param string $name
     * @param string $entityId
     * @param array  $filters
     *
     * @return array
     */
    public function pluck($name = 'name', $entityId = 'id', $filters = [])
    {
        return $this->model->where($filters)->pluck($name, $entityId)->toArray();
    }

    /**
     * @param $entityId
     * @param array $columns
     *
     * @return
     */
    public function find($entityId, $columns = ['*'])
    {
        return $this->model->with($this->with)->select($columns)->whereId($entityId)->first();
    }

    /**
     * @param array $filter
     * @param array $columns
     *
     * @return
     */
    public function first($filter = [], $columns = ['*'])
    {
        return $this->model->with($this->with)->select($columns)->where($filter)->first();
    }

    /**
     * @param $field
     * @param $value
     * @param array $columns
     *
     * @return
     */
    public function findBy($field, $value, $columns = ['*'])
    {
        return $this->model->with($this->with)->select($columns)->where($field, $value)->first();
    }
}
