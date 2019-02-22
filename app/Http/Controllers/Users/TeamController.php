<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 12:22 PM
 */

namespace App\Http\Controllers\Users;

use App\Contracts\Users\TeamContract;
use App\Contracts\Users\UserContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Users\TeamRequest;
use Illuminate\Http\Request;

/**
 * Class TeamController.
 */
class TeamController extends BaseController
{

    protected $routeIndex = 'teams.index';
    protected $routeCreate = 'teams.create';

    protected $viewIndex = 'users.teams.index';
    protected $viewCreate = 'users.teams.create';
    protected $viewEdit = 'users.teams.edit';
    protected $viewShow = 'users.teams.show';

    /**
     * @var UserContract
     */
    private $user;

    /**
     * ClientController constructor.
     *
     * @param TeamContract $team
     * @param UserContract $user
     * @param TeamRequest $request
     */
    public function __construct(
        TeamContract $team,
        UserContract $user,
        TeamRequest $request
    ) {
        parent::__construct($team, $request);

        $this->user = $user;
    }
}
