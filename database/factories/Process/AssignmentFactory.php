<?php

namespace Database\Factories\Process;

use App\Models\Catalog\Client;
use App\Models\Catalog\Program;
use App\Models\Process\Assignment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssignmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Assignment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'client_id' => Client::factory(),
            'program_id' => Program::factory(),
            'invoice_date' => $this->faker->dateTime
        ];
    }
}
