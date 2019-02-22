<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 11:44 AM
 */

use Faker\Generator as Faker;

$factory->define(App\Entities\Tasks\TaskEntity::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
        'seconds'     => $faker->numberBetween(100, 10000),
        'client_id'     => $faker->numberBetween(1, 10),
        'user_id'     => $faker->numberBetween(1, 50),
    ];
});
