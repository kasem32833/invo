<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Task;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
            'thumbnail' => 'https://picsum.phptos/300'
        ]);
        User::create([
            'name' => 'Demo User',
            'email' => 'demo@example.com',
            'password' => bcrypt('123'),
            'thumbnail' => 'https://picsum.phptos/300'
        ]);


        Client::factory(10)->create();

        Task::factory(50)->create();
    }
}
