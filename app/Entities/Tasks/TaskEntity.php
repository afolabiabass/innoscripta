<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 11:24 AM
 */

namespace App\Entities\Tasks;

use App\Entities\BaseEntity;
use App\Entities\Clients\ClientEntity;
use App\Entities\Users\UserEntity;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class UserEntity
 * @package App\Entities\Users
 */
class TaskEntity extends BaseEntity
{
    use LogsActivity;

    protected  $table = 'tasks';

    protected static $logAttributes = [
        'description',
    ];

    protected static $ignoreChangedAttributes = [
        'updated_at',
        'seconds',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'seconds'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(UserEntity::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(ClientEntity::class, 'client_id', 'id');
    }

}

