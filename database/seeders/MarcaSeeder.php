<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    public function run(): void
    {
        $marcas = [
            'Toyota',
            'Hyundai',
            'Caoa Chery',
            'Fiat',
            'Volkswagen',
            'Chevrolet',
            'Honda',
            'Nissan',
            'Renault',
            'Jeep',
            'Peugeot',
            'Citroën',
            'Ford',
            'Mitsubishi',
            'Kia',
            'Mercedes-Benz',
            'BMW',
            'Audi',
            'Volvo',
            'Land Rover'
        ];

        foreach ($marcas as $marca) {
            Marca::firstOrCreate(['nome' => $marca]);
        }
    }
}
