<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 14/02/2019
 * Time: 1:41 PM
 */

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Spatie\Activitylog\Models\Activity;

/**
 * App\Entities\BaseEntity.
 *
 * @method static bool|null forceDelete()
 * @method static Builder|BaseEntity onlyTrashed()
 * @method static bool|null restore()
 * @method static Builder|BaseEntity withTrashed()
 * @method static Builder|BaseEntity withoutTrashed()
 * @mixin Model
 * @property Carbon $created_at
 * @property int $id
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 * @property string $name
 * @property mixed $attributes
 * @property-read Collection|Activity[] $activity
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\BaseEntity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\BaseEntity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\BaseEntity query()
 */
class BaseEntity extends Model
{
    use SoftDeletes;

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];
}
