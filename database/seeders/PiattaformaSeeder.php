<?php

namespace Database\Seeders;

use App\Models\Piattaforma;
use Illuminate\Database\Seeder;

class PiattaformaSeeder extends Seeder
{
    public function run(): void
    {
        $piattaforme = [
            'PC',
            'PS5',
            'PS4',
            'Xbox Series X',
            'Xbox One',
            'Nintendo Switch',
            'Mobile',
        ];

        foreach ($piattaforme as $nome) {
            Piattaforma::firstOrCreate(['nome' => $nome]);
        }
    }
}
