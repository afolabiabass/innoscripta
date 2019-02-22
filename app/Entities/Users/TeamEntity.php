<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 10:42 AM
 */

namespace App\Entities\Users;

use App\Entities\BaseEntity;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class UserEntity
 * @package App\Entities\Users
 */
class TeamEntity extends BaseEntity
{
    use LogsActivity;

    protected  $table = 'teams';

    protected static $logAttributes = [
        'name', 'description',
    ];

    protected static $ignoreChangedAttributes = [
        'updated_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(UserEntity::class, 'team_id', 'id');
    }

}
