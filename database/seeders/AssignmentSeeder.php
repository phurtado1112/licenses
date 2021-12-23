<?php

namespace Database\Seeders;

use App\Models\Process\Assignment;
use Illuminate\Database\Seeder;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assignment::factory(5)->create();
    }
}
