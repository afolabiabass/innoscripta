<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 10:54 AM
 */

namespace App\Entities\Clients;

use App\Entities\BaseEntity;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class UserEntity
 * @package App\Entities\Users
 */
class ClientEntity extends BaseEntity
{
    use LogsActivity;

    protected  $table = 'clients';

    protected static $logAttributes = [
        'name',
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
        'name',
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

}
