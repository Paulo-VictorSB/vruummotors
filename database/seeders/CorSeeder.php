<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cor;

class CorSeeder extends Seeder
{
    public function run(): void
    {
        $cores = [
            'Preto',
            'Branco',
            'Prata',
            'Cinza',
            'Vermelho',
            'Azul',
            'Verde',
            'Amarelo',
            'Marrom',
            'Bege',
            'Laranja',
            'Outro'
        ];

        foreach ($cores as $cor) {
            Cor::firstOrCreate(['nome' => $cor]);
        }
    }
}
