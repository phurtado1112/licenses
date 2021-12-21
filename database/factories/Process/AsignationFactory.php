<?php

namespace Database\Factories\Process;

use App\Models\Catalog\Program;
use App\Models\User;
use App\Models\Catalog\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'client_id' => Client::all()->random()->id,
            'program_id' => Program::all()->random()->id,
            'invoice_date' => $this->faker->dateTime
        ];
    }
}
