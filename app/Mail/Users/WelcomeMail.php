<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 10/01/2019
 * Time: 3:43 PM
 */

namespace App\Mail\Users;

use App\Entities\Users\UserEntity;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var String
     */
    protected $token;
    /**
     * @var UserEntity
     */
    protected $user;

    /**
     * Create a new message instance.
     *
     * @param $token
     * @param $user
     */
    public function __construct(String $token, UserEntity $user)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.users.welcome')
            ->to($this->user->email, $this->user->full_name)
            ->subject('['.env('APP_NAME').'] Welcome to '. env('APP_NAME'))
            ->with('token',  $this->token);
    }
}
