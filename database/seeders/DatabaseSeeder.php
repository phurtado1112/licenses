<?php

namespace Database\Seeders;

use App\Models\Catalog\Client;
use App\Models\Catalog\Program;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        $this->call(class: AsignationSeeder::class);
        $this->call(class: Client::class);
        $this->call(class: Program::class);
    }
}
