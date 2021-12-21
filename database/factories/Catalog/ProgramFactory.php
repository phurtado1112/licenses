<?php

namespace Database\Factories\Catalog;

use App\Models\Catalog\Program;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Program::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'program_name' => $this->faker->text(20),
            'program_version' => $this->faker->text(6),
            'payment_date' => $this->faker->dateTime,
            'licenses_total' => $this->faker->numberBetween(5, 10),
            'user_id' => User::all()->random()->id,
        ];
    }
}
