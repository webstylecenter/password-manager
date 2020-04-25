<?php

use App\Models\Customer;
use App\Models\Domain;
use App\Models\Server;
use App\User;
use Illuminate\Database\Seeder;

class InstallSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Server::class, 50)->create();
        factory(Customer::class, 30)->create();
        factory(Domain::class, 100)->create();

        User::insert([
            'name' => 'Peter van Dam',
            'email' => 'peter@petervdam.nl',
            'password' => '$2y$10$QXjEwd72Xi01eq.HvXrGOuKV19Hjv55TpSDMw5U9o8mamlJujvoR6'
        ]);
    }
}
