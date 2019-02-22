<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 1:33 PM
 */

namespace App\Entities\Users;

use App\Entities\BaseEntity;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class LoginEntity
 * @package App\Entities\Users
 */
class LoginEntity extends BaseEntity
{
    protected  $table = 'user_login';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'login_at', 'logout_at', 'ip_address', 'session'
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
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(UserEntity::class, 'id', 'user_id');
    }

}
