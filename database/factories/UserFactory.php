<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Users\UserEntity::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'team_id' => rand(1, 10),
        'remember_token' => str_random(10),
    ];
});
