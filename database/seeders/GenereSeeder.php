<?php

namespace Database\Seeders;

use App\Models\Genere;
use Illuminate\Database\Seeder;

class GenereSeeder extends Seeder
{
    public function run(): void
    {
        $generi = [
            'Azione',
            'Avventura',
            'RPG',
            'Strategia',
            'Sparatutto',
            'Racing',
            'Sport',
            'Puzzle',
            'Horror',
            'Simulazione',
            'Platform',
            'Roguelike',
            'Indie',
            'Open World',
        ];

        foreach ($generi as $nome) {
            Genere::firstOrCreate(['nome' => $nome]);
        }
    }
}
