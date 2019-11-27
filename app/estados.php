<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\estados;
use App\User;
use App\pais;

class estados extends Model
{
    protected $table = 'estados';

    public function pais(){
    	return $this->belongsTo(pais::class);
    }
}
