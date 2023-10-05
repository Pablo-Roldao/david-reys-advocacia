<?php

namespace Database\Seeders;

use App\Models\UsefulLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsefulLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsefulLink::factory()->count(10)->create();
    }
}
