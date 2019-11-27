<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicacao;

class publicacaoController extends Controller
{
    public function show($id)
    {
    	$publicacao = publicacao::where('id',$id)->with('conteudo')->get()->first();
    	//dd($publicacao);
    	return view('publicacao',['pub' => $publicacao]);
    }
    public function index()
    {
    	$listapublicacao = publicacao::all();
    	//dd($publicacao);
    	return view('listapub',['publicacoes' => $listapublicacao]);
    }
}
