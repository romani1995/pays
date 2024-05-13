<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ville;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ville::create([
            'nom' => "Mohammedia",
            'countr_id' => 1,
        ]);

        Ville::create([
            'nom' => "Casablanca",
            'countr_id' => 1,
        ]);

        Ville::create([
            'nom' => "Marrakech",
            'countr_id' => 1,
        ]);

        Ville::create([
            'nom' => "Agadir",
            'countr_id' => 1,
        ]);

        Ville::create([
            'nom' => "Gaza",
            'countr_id' => 2,
        ]);

        Ville::create([
            'nom' => "Rafah",
            'countr_id' => 2,
        ]);

        Ville::create([
            'nom' => "Montréal",
            'countr_id' => 4,
        ]);

    }
}
