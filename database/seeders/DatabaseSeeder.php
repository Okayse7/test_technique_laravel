<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Property;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Création de plusieurs utilisateurs
        $users = [
            ['name' => 'Alice', 'email' => 'alice@example.com', 'password' => 'alice1234'],
            ['name' => 'Bob', 'email' => 'bob@example.com', 'password' => 'bob1234'],
            ['name' => 'Charlie', 'email' => 'charlie@example.com', 'password' => 'charlie1234'],
            ['name' => 'Diane', 'email' => 'diane@example.com', 'password' => 'diane1234'],
            ['name' => 'Eve', 'email' => 'eve@example.com', 'password' => 'eve1234'],
        ];
        foreach ($users as $user) {
            User::firstOrCreate(
                [
                    'email' => $user['email'],
                    'name' => $user['name'],
                    'password' => $user['password'],
                ]
            );
        }

        // Création de plusieurs propriétés
        $properties = [
            [
                'name' => 'Villa Bord de Mer',
                'description' => 'Superbe villa avec vue sur la mer.',
                'price_per_night' => 250,
            ],
            [
                'name' => 'Chalet Montagne',
                'description' => 'Chalet cosy au pied des pistes.',
                'price_per_night' => 180,
            ],
            [
                'name' => 'Appartement Centre Ville',
                'description' => 'Appartement moderne en plein centre.',
                'price_per_night' => 120,
            ],
            [
                'name' => 'Maison de Campagne',
                'description' => 'Maison au calme avec grand jardin.',
                'price_per_night' => 140,
            ],
            [
                'name' => 'Studio Étudiant',
                'description' => 'Studio pratique proche université.',
                'price_per_night' => 60,
            ],
            [
                'name' => 'Loft Industriel',
                'description' => 'Loft design dans un ancien entrepôt.',
                'price_per_night' => 200,
            ],
            [
                'name' => 'Cabane dans les arbres',
                'description' => 'Expérience insolite en forêt.',
                'price_per_night' => 90,
            ],
            [
                'name' => 'Riad Marrakech',
                'description' => 'Riad traditionnel avec patio.',
                'price_per_night' => 170,
            ],
            [
                'name' => 'Bungalow Plage',
                'description' => 'Bungalow pieds dans l’eau.',
                'price_per_night' => 130,
            ],
            [
                'name' => 'Penthouse Luxe',
                'description' => 'Penthouse avec vue panoramique.',
                'price_per_night' => 350,
            ],
        ];
        foreach ($properties as $property) {
            Property::firstOrCreate(['name' => $property['name']], $property);
        }


    }
}
