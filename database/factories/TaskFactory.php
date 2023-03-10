<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()

    {
        $price = [200, 300, 500, 800];
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->sentences(rand(2, 5), true),
            'price' => $price[rand(0, 3)],
            'client_id' => Client::all()->random()->id ,
            'user_id' => User::all()->random()->id,

        ];
    }
}
