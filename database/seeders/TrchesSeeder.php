<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trche;

class TrchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ajouter 10 entrées dans la table trches
        for ($i = 1; $i <= 10; $i++) {
            Trche::create([
                'id_admin' => 1, // Remplacez par un ID valide d'utilisateur admin
                'id_entreprises' => 1, // Remplacez par un ID valide d'entreprise
                'qunt_ca' => rand(10, 100), // Quantité CA
                'qunt_pa' => rand(10, 100), // Quantité PA
                'qunt_pl' => rand(10, 100), // Quantité PL
                'qunt_ve' => rand(10, 100), // Quantité VE
                'qunt_me' => rand(10, 100), // Quantité ME
                'qunt_or' => rand(10, 100), // Quantité OR
                'description' => 'Description de la tranche ' . $i, // Description
                'status' => $i % 2 === 0 ? 'active' : 'inactive', // Statut actif/inactif
            ]);
        }
    }
}
