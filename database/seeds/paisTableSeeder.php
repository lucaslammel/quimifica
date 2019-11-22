<?php

use Illuminate\Database\Seeder;
use App\pais;

class paisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pais::create([
        	'nome' => 'Brasil',
        	'sigla' => 'BR'
        ]);

        pais::create([
        	'nome' => 'Estados Unidos da América',
        	'sigla' => 'EUA'
        ]);
    }
}
