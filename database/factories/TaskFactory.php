<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Str;

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
        $name =$this->faker->sentence();
        $price = [200, 300, 500, 800];
        $status = ['pending', 'completed'];
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->sentences(rand(2, 5), true),
            'price' => $price[rand(0, 3)],
            'status' => $status[rand(0, 1)],
            'client_id' => Client::all()->random()->id ,
            'user_id' => User::all()->random()->id,

        ];
    }
}
