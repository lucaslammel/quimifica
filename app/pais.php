<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\estados;
use App\User;
use App\pais;

class pais extends Model
{
    protected $table = 'pais';

    	public function estados(){
    		return $this->hasMany(estados::class);
    	} 
}
