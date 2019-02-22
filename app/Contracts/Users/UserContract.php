<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 11:48 AM
 */

namespace App\Contracts\Users;

use App\Contracts\BaseContract;

/**
 * Interface UserContract
 * @package App\Contracts\Users
 */
interface UserContract extends BaseContract
{
    /**
     * @param array $filter
     * @return mixed
     */
    public function getUserLogins($filter = []);
}
