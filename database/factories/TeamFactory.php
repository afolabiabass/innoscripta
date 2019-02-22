<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 11:16 AM
 */

use Faker\Generator as Faker;

$factory->define(App\Entities\Users\TeamEntity::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});
