<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 12:23 PM
 */

namespace App\Http\Controllers\Tasks;

use App\Contracts\Tasks\TaskContract;
use App\Contracts\Clients\ClientContract;
use App\Contracts\Users\UserContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Tasks\TaskRequest;
use Illuminate\Http\Request;

/**
 * Class TaskController.
 */
class TaskController extends BaseController
{

    protected $routeIndex = 'tasks.index';
    protected $routeCreate = 'tasks.create';

    protected $viewIndex = 'tasks.index';
    protected $viewCreate = 'tasks.create';
    protected $viewEdit = 'tasks.edit';
    protected $viewShow = 'tasks.show';

    /**
     * @var UserContract
     */
    private $user;
    /**
     * @var ClientContract
     */
    private $client;

    /**
     * ClientController constructor.
     *
     * @param TaskContract $task
     * @param ClientContract $client
     * @param UserContract $user
     * @param TaskRequest $request
     */
    public function __construct(
        TaskContract $task,
        ClientContract $client,
        UserContract $user,
        TaskRequest $request
    ) {
        parent::__construct($task, $request);

        $this->client = $client;
        $this->user = $user;
    }
}
