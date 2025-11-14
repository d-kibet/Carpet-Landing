<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user for Filament (or update if exists)
        User::updateOrCreate(
            ['email' => 'admin@rahacarpetwash.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        // Seed Rahacarpetwash data
        $this->call([
            RahaCarpetWashSeeder::class,
        ]);
    }
}
