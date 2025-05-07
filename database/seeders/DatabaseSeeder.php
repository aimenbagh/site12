<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'vile' => 'Default City', // Ajoutez une valeur pour le champ 'vile'
            'address' => 'Default Address', // Ajoutez une valeur pour le champ 'address'
            'postal_code' => '00000', // Ajoutez une valeur pour le champ 'postal_code'
        ]);

        $this->call(UserSeeder::class);
    }
}
