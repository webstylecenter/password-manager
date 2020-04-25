<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Server;
use Faker\Generator as Faker;

$factory->define(Server::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'ip' => $faker->ipv4,
        'root_username' => $faker->userName,
        'root_password' => $faker->password,
        'up_votes' => rand(0, 200),
        'down_votes' => rand(0, 150),
        'latest_up_vote' => $faker->dateTime,
        'latest_down_vote' => $faker->dateTime,
        'comments' => $faker->realText()
    ];
});
