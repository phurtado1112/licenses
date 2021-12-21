<?php

namespace Database\Seeders;

use App\Models\Process\Asignation;
use Illuminate\Database\Seeder;

class AsignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asignation::factory(10)->create();
    }
}
