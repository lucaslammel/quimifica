<?php

namespace App\Http\Controllers;

use App\publicacao;
use App\conteudo;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class publicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listapublicacao = publicacao::all();
        //dd($publicacao);
        return view('publicacao.list',['publicacoes' => $listapublicacao]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = conteudo::all();
        return view('publicacao.create', ['result' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $messages = array(
            'titulo.required' => 'É obrigatório um título para a publicação',
            'texto.required' => 'É obrigatória uma descrição para a publicação',
        );

        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'texto' => 'required',
        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect('publicacao/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        //se passou pelas validações, processa e salva no banco...
        $obj_publicacao = new publicacao();
        $obj_publicacao->titulo =       $request['titulo'];
        $obj_publicacao->texto = $request['texto'];
        $obj_publicacao->conteudo_id = $request['conteudo_id'];
        $obj_publicacao->user_id     = Auth::id();
        $obj_publicacao->save();

        return redirect('/publicacao')->with('success', 'Publicação criada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacao = publicacao::find($id);
        //dd($publicacao);
        return view('publicacao.show',['pub' => $publicacao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacao = publicacao::find($id);
        $result = conteudo::all();
        //dd($publicacao);
        return view('publicacao.edit',['pub' => $publicacao, 'result' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = array(
            'titulo.required' => 'É obrigatório um título para a publicação',
            'texto.required' => 'É obrigatória uma descrição para a publicação',
        );

        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'texto' => 'required',
        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect('publicacao/$id/edit')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        //se passou pelas validações, processa e salva no banco...
        $obj_publicacao = publicacao::findOrFail($id);
        $obj_publicacao->titulo =       $request['titulo'];
        $obj_publicacao->texto = $request['texto'];
        $obj_publicacao->conteudo_id = $request['conteudo_id'];
        $obj_publicacao->save();

        return redirect('/publicacao')->with('success', 'Publicação alterada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $obj_publicacao = publicacao::find($id);
        return view('publicacao.delete',['publicacao' => $obj_publicacao]);
    }

    public function destroy($id)
    {
        $obj_publicacao = publicacao::findOrFail($id);
        $obj_publicacao->delete($id);
        return redirect('/publicacao')->with('success','Atividade excluída com sucesso!');
    }
}
