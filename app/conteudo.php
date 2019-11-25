<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class conteudo extends Model
{
    protected $table = 'conteudo';

    public function publicacoes(){
    	return $this->hasMany(publicacao::class);
    }
}
