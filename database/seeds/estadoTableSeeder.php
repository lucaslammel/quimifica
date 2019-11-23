<?php

use Illuminate\Database\Seeder;

class estadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estado::create([
        	'nome' => 'Rio Grande do Sul'//$table->string('nome');
            'sigla' => 'RS'//$table->string('sigla');
            'codigo_pais' => '1'//$table->string('codigo_pais');
        ]);

        estado::create([
        	'nome' => 'Iowa'//$table->string('nome');
            'sigla' => 'IA'//$table->string('sigla');
            'codigo_pais' => '2'//$table->string('codigo_pais');
        ]);
    }
}
