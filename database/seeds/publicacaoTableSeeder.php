<?php

use Illuminate\Database\Seeder;
use App\publicacao;
use App\users;

class publicacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        publicacao::create([
        	
        	'titulo' => 'Éster',//$table->string('titulo');
            'texto' => 'o ester é uma parte da quimica orgânica que...',//$table->string('texto');
            'user_id' => '1',//$table->integer('user_id');
            'conteudo_id' => '1'//$table->integer('coteudo_id');
        
        ]);

        publicacao::create([
            
            'titulo' => 'Éter',//$table->string('titulo');
            'texto' => 'asdasdasdasasd',//$table->string('texto');
            'user_id' => '1',//$table->integer('user_id');
            'conteudo_id' => '1'//$table->integer('coteudo_id');
        
        ]);
    }
    }

