<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 12:23 PM
 */

namespace App\Http\Controllers\Clients;

use App\Contracts\Clients\ClientContract;
use App\Contracts\Users\UserContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Clients\ClientRequest;
use Illuminate\Http\Request;

/**
 * Class ClientController.
 */
class ClientController extends BaseController
{

    protected $routeIndex = 'clients.index';
    protected $routeCreate = 'clients.create';

    protected $viewIndex = 'clients.index';
    protected $viewCreate = 'clients.create';
    protected $viewEdit = 'clients.edit';
    protected $viewShow = 'clients.show';

    /**
     * @var UserContract
     */
    private $user;

    /**
     * ClientController constructor.
     *
     * @param ClientContract $client
     * @param UserContract $user
     * @param ClientRequest $request
     */
    public function __construct(
        ClientContract $client,
        UserContract $user,
        ClientRequest $request
     ) {
        parent::__construct($client, $request);

        $this->user = $user;
    }
}
