<?php

namespace App\Listeners;

use App\Entities\Users\LoginEntity;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class LogSuccessfulLogout
 * @package App\Listeners
 */
class LogSuccessfulLogout
{
    protected $request;

    /**
     * Create the event listener.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        $login = LoginEntity::where('user_id', $event->user->id)->orderBy('created_at', 'desc')->first();
        if ($login) {
            $login->logout_at =  date('Y-m-d H:i:s');
            $login->save();
        }
    }
}
