<?php

namespace Database\Seeders;

use App\Models\Catalog\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory(10)->create();
    }
}
