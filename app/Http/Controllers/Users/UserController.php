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
use App\Http\Requests\Users\UserRequest;
use Illuminate\Http\Request;

/**
 * Class TeamController.
 */
class UserController extends BaseController
{

    protected $routeIndex = 'users.index';
    protected $routeCreate = 'users.create';

    protected $viewIndex = 'users.index';
    protected $viewCreate = 'users.create';
    protected $viewEdit = 'users.edit';
    protected $viewShow = 'users.show';


    /**
     * @var TeamContract
     */
    private $team;

    /**
     * ClientController constructor.
     *
     * @param UserContract $user
     * @param TeamContract $team
     * @param UserRequest $request
     */
    public function __construct(
        UserContract $user,
        TeamContract $team,
        UserRequest $request
    ) {
        parent::__construct($user, $request);

        $this->team = $team;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logins(Request $request)
    {
        return view('welcome')
            ->with('logins', $this->interface->getUserLogins($request->all()))
            ->with ('users', $this->interface->pluck())
            ->with ('teams', $this->team->pluck());
    }
}
