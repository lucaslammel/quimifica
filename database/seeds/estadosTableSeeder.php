<?php

use Illuminate\Database\Seeder;
use App\estados;

class estadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estados::create([

        'nome' => 'Rio Grande do Sul',	//$table->string('nome');
        'sigla' => 'RS',    //$table->string('sigla');
        'pais_id' => '1'    //$table->integer('pais_id');
    ]);
    }
}
