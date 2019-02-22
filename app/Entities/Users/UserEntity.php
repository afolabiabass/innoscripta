<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 10:42 AM
 */

namespace App\Entities\Users;

use App\Entities\Tasks\TaskEntity;
use App\Mail\Users\PasswordResetMail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class UserEntity
 * @package App\Entities\Users
 */
class UserEntity extends Authenticatable
{
    use Notifiable, LogsActivity;

    protected  $table = 'users';

    protected static $logAttributes = [
        'name',
        'email',
    ];

    protected static $ignoreChangedAttributes = [
        'updated_at',
        'remember_token',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'team_id', 'email_verified_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        Mail::send(new PasswordResetMail($token, $this));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne(TeamEntity::class, 'id', 'team_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(TaskEntity::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logins()
    {
        return $this->hasMany(LoginEntity::class, 'user_id', 'id');
    }

}
