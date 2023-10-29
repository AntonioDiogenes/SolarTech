<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pacotes;

class PacotesSeeder extends Seeder
{
    public function run()
    {
        Pacotes::create([
            'nomePacote' => 'basico',
            'quantidadePlacas' => 3,
            'valor' => 300,
        ]);

        Pacotes::create([
            'nomePacote' => 'medio',
            'quantidadePlacas' => 6,
            'valor' => 600,
        ]);

        Pacotes::create([
            'nomePacote' => 'premiun',
            'quantidadePlacas' => 9,
            'valor' => 900,
        ]);
    }
}