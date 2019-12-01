<?php

namespace App\Http\Controllers;

use App\publicacao;
use App\conteudo;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class conteudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaconteudo = conteudo::all();
        //dd($conteudo);
        return view('conteudo.list',['conteudos' => $listaconteudo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conteudo.create');
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
            'titulo.required' => 'É obrigatório um título para o conteúdo',
            'descricao.required' => 'É obrigatória uma descrição para o conteúdo',
        );

        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'descricao' => 'required',
        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect('conteudo/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        //se passou pelas validações, processa e salva no banco...
        $obj_conteudo = new conteudo();
        $obj_conteudo->titulo =       $request['titulo'];
        $obj_conteudo->descricao = $request['descricao'];
        $obj_conteudo->user_id     = Auth::id();
        $obj_conteudo->save();

        return redirect('/conteudo')->with('success', 'Conteúdo criado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conteudo = conteudo::find($id);
        //dd($conteudo);
        $publicacao = publicacao::where('conteudo_id', $id)->get();
        return view('conteudo.show',['con' => $conteudo, 'pub' => $publicacao]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conteudo = conteudo::find($id);
        return view('conteudo.edit',['con' => $conteudo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = array(
            'titulo.required' => 'É obrigatório um título para o conteúdo',
            'descricao.required' => 'É obrigatória uma descrição para o conteúdo',
        );

        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'descricao' => 'required',
        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect('conteudo/$id/edit')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        //se passou pelas validações, processa e salva no banco...
        $obj_conteudo = conteudo::findOrFail($id);
        $obj_conteudo->titulo =       $request['titulo'];
        $obj_conteudo->descricao = $request['descricao'];
        $obj_conteudo->save();

        return redirect('/conteudo')->with('success', 'Conteúdo alterado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $obj_conteudo = conteudo::find($id);
        return view('conteudo.delete',['conteudo' => $obj_conteudo]);
    }

    public function destroy($id)
    {
        $obj_conteudo = conteudo::findOrFail($id);
        $obj_conteudo->delete($id);
        return redirect('/conteudo')->with('success','Atividade excluída com sucesso!');
    }
}