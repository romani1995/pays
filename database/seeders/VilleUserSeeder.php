<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VilleUser;

class VilleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VilleUser::create([
            'user_id' => 1,
            'ville_id' => 1,
        ]);
        VilleUser::create([
            'user_id' => 2,
            'ville_id' => 1,
        ]);
        VilleUser::create([
            'user_id' => 3,
            'ville_id' => 1,
        ]);

        VilleUser::create([
            'user_id' => 4,
            'ville_id' => 2,
        ]);
        VilleUser::create([
            'user_id' => 5,
            'ville_id' => 2,
        ]);
        VilleUser::create([
            'user_id' => 6,
            'ville_id' => 2,
        ]);
        VilleUser::create([
            'user_id' => 7,
            'ville_id' => 2,
        ]);
        VilleUser::create([
            'user_id' => 8,
            'ville_id' => 2,
        ]);

        VilleUser::create([
            'user_id' => 9,
            'ville_id' => 4,
        ]);
        VilleUser::create([
            'user_id' => 10,
            'ville_id' => 4,
        ]);
        VilleUser::create([
            'user_id' => 11,
            'ville_id' => 4,
        ]);

    }
}
