<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('admin@gmail.com'),
            'role' => "admin",
        ]);

        User::create([
            'name' => "User1",
            'email' => "user1@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user1@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User2",
            'email' => "user2@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user2@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User3",
            'email' => "user3@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user3@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User4",
            'email' => "user4@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user4@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User5",
            'email' => "user5@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user5@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User6",
            'email' => "user6@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user6@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User7",
            'email' => "user7@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user7@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User8",
            'email' => "user8@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user8@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User9",
            'email' => "user9@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user9@gmail.com'),
            'role' => "user",
        ]);

        User::create([
            'name' => "User10",
            'email' => "user10@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('user10@gmail.com'),
            'role' => "user",
        ]);

    }
}
