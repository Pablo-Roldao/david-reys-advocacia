<?php

namespace Database\Seeders;

use App\Models\ExpertiseArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpertiseAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpertiseArea::factory()->create([
            'content' => "Temos o prazer de oferecer serviços jurídicos especializados para atender às diversas necessidades dos nossos clientes. Com uma equipe experiente de advogados dedicados, estamos comprometidos em fornecer orientação legal sólida e estratégica em uma variedade de áreas do direito."
        ]);
    }
}
