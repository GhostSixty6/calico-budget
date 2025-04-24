<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => env('USER_NAME', 'demo'),
            'email' => env('USER_NAME', 'demo'),
            'password' => env('USER_PASS', 'demo'),
        ]);

        Product::factory(10)->create();
    }
}
