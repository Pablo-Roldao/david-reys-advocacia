<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->createMany([
            [
                'name' => 'Connecta',
                'email' => 'connectatecnologia.dev@gmail.com',
                'password' => Hash::make('connecta')
            ],
            [
                'name' => 'David Reys Advocacia',
                'email' => 'davidreysadvocacia@gmail.com',
                'password' => Hash::make('davidreys')
            ]
        ]);
    }
}
