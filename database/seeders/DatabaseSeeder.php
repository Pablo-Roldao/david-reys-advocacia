<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AboutSeeder::class,
            ExpertiseAreaSeeder::class,
            ContactSeeder::class,
            PhoneSeeder::class,
            PostSeeder::class,
            TeamMemberSeeder::class,
            OfficeSeeder::class,
            ServiceSeeder::class,
            ImageContactSeeder::class,
            ImageAboutSeeder::class,
        ]);
    }
}
