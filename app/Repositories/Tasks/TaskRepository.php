<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 12:15 PM
 */

namespace App\Repositories\Tasks;

use App\Contracts\Tasks\TaskContract;
use App\Entities\Tasks\TaskEntity;
use App\Repositories\BaseRepository;

/**
 * Class TaskRepository
 * @package App\Repositories\Tasks
 */
class TaskRepository extends BaseRepository implements TaskContract
{
    /**
     * @return string
     */
    protected function getClass(): string
    {
        return TaskEntity::class;
    }
}
