<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->username() ,
            'email' =>$this->faker->unique()->safeEmail() ,
            'phone' =>$this->faker->phonenumber() ,
            'country' =>$this->faker->country() ,
            'user_id' => User::all()->random()->id,
            'thumbnail' =>'https://picsum.photos/100?random='.rand(1, 22424)
        ];
    }
}
