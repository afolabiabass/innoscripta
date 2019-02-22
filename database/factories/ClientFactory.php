<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 11:16 AM
 */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Entities\Clients\ClientEntity::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
