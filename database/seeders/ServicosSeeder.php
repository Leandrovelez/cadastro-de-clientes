<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servico;

class ServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            [
                'servico' => 'Social Media' ,
            ],
            [
                'servico' => 'CRM' ,
            ],
            [
                'servico' => 'Mídia' ,
            ],
            [
                'servico' => 'SEO' ,
            ]
        ];

        Servico::insert($dados);
    }
}
