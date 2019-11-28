<?php

use Illuminate\Database\Seeder;
use App\conteudo;
use App\users;

class conteudoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        conteudo::create([
        'titulo' => 'Química Orgânica',
        'descricao' => 'A Química Orgânica estuda a composição e as propriedades dos compostos que apresentam o carbono como principal elemento químico. fodase',
        'user_id' => '1']);
    }
}
