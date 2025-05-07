<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\Entreprise;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vérifier si l'utilisateur admin existe déjà
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@example.com'], // Condition pour vérifier l'existence
            [ // Valeurs à insérer si l'utilisateur n'existe pas
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'vile' => 'Paris',
                'address' => '123 Rue Admin',
                'postal_code' => '75001',
                'role' => 'admin',
            ]
        );

        // Vérifier si l'entrée admin existe déjà
        Admin::firstOrCreate(
            ['id_user' => $adminUser->id] // Condition pour vérifier l'existence
        );

        // Vérifier si l'utilisateur entreprise existe déjà
        $entrepriseUser = User::firstOrCreate(
            ['email' => 'entreprise@example.com'], // Condition pour vérifier l'existence
            [ // Valeurs à insérer si l'utilisateur n'existe pas
                'name' => 'Entreprise User',
                'password' => Hash::make('password'),
                'vile' => 'Default City',
                'address' => 'Default Address',
                'postal_code' => '00000',
                'role' => 'entreprise',
            ]
        );

        // Vérifier si l'entrée entreprise existe déjà
        Entreprise::firstOrCreate(
            ['id_users' => $entrepriseUser->id], // Condition pour vérifier l'existence
            [
                'name' => 'Default Entreprise Name', // Fournir une valeur pour 'name'
                'code' => 'ENT123',
                'address' => 'Default Address',
                'city' => 'Default City',
                'postal_code' => '00000',
                'phone' => '0000000000',
                'email' => 'entreprise@example.com',
            ]
        );

        // Vérifier si un utilisateur de test existe déjà
        User::firstOrCreate(
            ['email' => 'test@example.com'], // Condition pour vérifier l'existence
            [ // Valeurs à insérer si l'utilisateur n'existe pas
                'name' => 'Test User',
                'password' => Hash::make('password'),
                'vile' => 'Default City',
                'address' => 'Default Address',
                'postal_code' => '00000',
                'role' => 'client',
            ]
        );
    }
}