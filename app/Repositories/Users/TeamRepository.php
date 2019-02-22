<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 12:16 PM
 */

namespace App\Repositories\Users;

use App\Contracts\Users\TeamContract;
use App\Entities\Users\TeamEntity;
use App\Repositories\BaseRepository;

/**
 * Class TeamRepository
 * @package App\Repositories\Users
 */
class TeamRepository extends BaseRepository implements TeamContract
{
    /**
     * @return string
     */
    protected function getClass(): string
    {
        return TeamEntity::class;
    }
}
