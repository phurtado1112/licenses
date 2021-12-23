<?php

namespace Database\Factories\Process;

use App\Models\Catalog\Client;
use App\Models\Process\Assignment;
use App\Models\Process\Invoice;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

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
            'assignment_id' => Assignment::factory(),
            'quantity' => $this->faker->biasedNumberBetween(1, 3),
            'price' => $this->faker->randomFloat(2,10,20),
            'total' => $this->faker->randomFloat(2, 10, 100)
        ];
    }
}
