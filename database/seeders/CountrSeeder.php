<?php

namespace Database\Seeders;

use App\Models\Countr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Countr::create([
            'nom' => "Maroc",
        ]);

        Countr::create([
            'nom' => "Palestine",
        ]);

        Countr::create([
            'nom' => "Indonesia",
        ]);

        Countr::create([
            'nom' => "Canada",
        ]);

        Countr::create([
            'nom' => "Argentine",
        ]);

    }
}
