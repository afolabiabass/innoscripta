<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 14/02/2019
 * Time: 1:41 PM
 */

namespace App\Contracts;

/**
 * Interface BaseContract
 * @package App\Contracts
 */
interface BaseContract
{
    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function all($columns = ['*']);

    /**
     * @param array $data
     *
     * Base|\Illuminate\Database\Eloquent\Model
     */
    public function create($data = []);

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function updateOrCreate($data = []);

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function insert($data = []);

    /**
     * @param array $data
     * @param $id
     *
     * @return mixed
     */
    public function update($id, $data = []);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find($id, $columns = ['*']);

    /**
     * @param $field
     * @param $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findBy($field, $value, $columns = ['*']);

    /**
     * @param int   $limit
     * @param array $filters
     * @param bool  $simple
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function pagination($limit = 10, $filters = [], $simple = true);

    /**
     * @param int   $limit
     * @param array $filters
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function get($filters = []);

    /**
     * @param string $name
     * @param string $entityId
     * @param array  $filters
     *
     * @return mixed
     */
    public function pluck($name = 'name', $entityId = 'id', $filters = []);

    /**
     * @param array $filter
     * @param array $columns
     *
     * @return mixed
     */
    public function first($filter = [], $columns = ['*']);
}
