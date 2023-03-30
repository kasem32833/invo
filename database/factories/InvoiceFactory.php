<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'invoice_id' => 'INVO_' .rand(223, 22345 ),
            'client_id' => Client::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'download_url' => 'https://picsum/phptos'
        ];
    }
}
