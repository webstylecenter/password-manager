<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Domain;
use Faker\Generator as Faker;

$factory->define(Domain::class, function (Faker $faker) {
   return [
       'name' => $faker->domainName,
       'server_id' => rand(1, 50),
       'customer_id' => rand(1, 25),
       'ssh_user' => $faker->userName,
       'ssh_password' => $faker->password,
       'ssh_up_votes' => rand(0, 100),
       'ssh_down_votes' => rand(0, 80),
       'latest_ssh_vote' => $faker->dateTime,
       'backend_url' => $faker->url,
       'admin_user' => $faker->userName,
       'admin_password' => $faker->password,
       'admin_up_votes' => rand(0, 100),
       'admin_down_votes' => rand(0, 50),
       'latest_admin_vote' => $faker->dateTime,
       'comments' => $faker->realText(rand(100, 900))
   ];
});
