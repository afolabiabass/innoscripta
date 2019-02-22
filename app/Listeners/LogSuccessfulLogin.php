<?php

namespace App\Listeners;

use App\Entities\Users\LoginEntity;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class LogSuccessfulLogin
 * @package App\Listeners
 */
class LogSuccessfulLogin
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        LoginEntity::create([
            'user_id' => $event->user->id,
            'login_at' => date('Y-m-d H:i:s'),
            'ip_address' => $this->request->ip(),
            'session' => session()->getId()
        ]);
    }
}
