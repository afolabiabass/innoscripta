<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 12:15 PM
 */

namespace App\Repositories\Users;

use App\Contracts\Users\UserContract;
use App\Entities\Users\LoginEntity;
use App\Entities\Users\UserEntity;
use App\Repositories\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories\Users
 */
class UserRepository extends BaseRepository implements UserContract
{
    /**
     * @return string
     */
    protected function getClass(): string
    {
        return UserEntity::class;
    }

    /**
     * @param array $filter
     * @return mixed
     */
    public function getUserLogins($filter = [])
    {
        $logins = LoginEntity::orderBy('login_at', 'asc');

        if (isset($filter['after_date']) && $filter['after_date'] != '') {
            $logins->where('login_at', '>=',  $filter['after_date']);
        }

        if (isset($filter['before_date']) && $filter['before_date'] != '') {
            $logins->where('login_at', '<=', $filter['before_date']);
        }

        if (isset($filter['teams'])) {
            $logins->whereHas('user', function ($query) use ($filter) {
                $query->whereIn('team_id', (array) $filter['teams']);
            });
        }

        if (isset($filter['users'])) {
            $logins->whereHas('user', function ($query) use ($filter) {
                $query->whereIn('id', (array) $filter['users']);
            });
        }

        return $logins->paginate();
    }
}
