<?php

namespace Database\Seeders;

use App\Models\Pop;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(PopSeeder::class);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('John1234'),
        ]);

        User::factory()->create([
            'name' => 'Brandon de Baat',
            'email' => 'brandon@example.com',
            'password' => bcrypt('Okidokie98'),
        ]);
    }
}
