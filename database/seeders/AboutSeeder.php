<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::factory()->create([
            'home_title' => 'Oferecemos serviços jurídicos confiáveis e eficazes',
            'home_content' => "O Escritório David Reys Advocacia possui mais de 15 anos de atuação nas mais diversas áreas jurídicas, abrangendo também vários estados do Brasil.
            \nNossas estruturas estão situadas não somente em Maceió/AL como também em Garanhus/PE, União dos Palmares/AL e Porto Calvo/AL.
            \nNossa equipe de profissionais é excepcionalmente qualificada e altamente empenhada em trazer a melhor experiência no atendimento e satisfação total aos seus clientes.
            [...]",
            'title' => 'Oferecemos serviços jurídicos confiáveis e eficazes',
            'content' => "O Escritório David Reys Advocacia possui mais de 15 anos de atuação nas mais diversas áreas jurídicas, abrangendo também vários estados do Brasil.
            \nNossas estruturas estão situadas não somente em Maceió/AL como também em Garanhus/PE, União dos Palmares/AL e Porto Calvo/AL.
            \nNossa equipe de profissionais é excepcionalmente qualificada e altamente empenhada em trazer a melhor experiência no atendimento e satisfação total aos seus clientes.
            \nReiteramos a proposta visceral pelo compromisso da prestação de serviço ético e completamente eficiente, integrado com as mais sofisticadas ferramentas de estruturação e execução dos serviços jurídicos disponíveis, seja de forma contenciosa ou até mesmo na consultoria preventiva.
            \nNosso proposito maior é oferecer a melhor experiência de assistência jurídica no mais alto padrão de qualidade e excelência possível."
        ]);
    }
}
