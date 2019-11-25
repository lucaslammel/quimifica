<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\conteudo;
use App\User;

class publicacao extends Model
{
    protected $table = 'publicacao';

    public function conteudo(){
    	return $this->belongsTo(conteudo::class);
    }	
}
