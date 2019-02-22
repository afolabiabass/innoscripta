<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 12:15 PM
 */

namespace App\Repositories\Clients;

use App\Contracts\Clients\ClientContract;
use App\Entities\Clients\ClientEntity;
use App\Repositories\BaseRepository;

/**
 * Class ClientRepository
 * @package App\Repositories\Clients
 */
class ClientRepository extends BaseRepository implements ClientContract
{
    /**
     * @return string
     */
    protected function getClass(): string
    {
        return ClientEntity::class;
    }
}
