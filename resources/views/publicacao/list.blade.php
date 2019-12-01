<!DOCTYPE html>
@extends('layouts.app')

@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QuimIFica</title>
        @if(\Session::has('success'))
        <div class="container">
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        </div>
        @endif
        <!-- Styles -->
            </head>
    <body>
    <nav>
        <div class="flex-center position-ref full-height">
                <h1>Lista de Publicações</h1>
        </div>
            

<table>
    @foreach($publicacoes as $pub)
<tr style="border: 1">
<td><a href="/publicacao/{{$pub->id}}" style="text-decoration: none"><p style="font-family: 'Arial'; font-size: 20px">{{$pub->titulo}}</p></td>
<td><a href="/conteudo/{{$pub->conteudo->id}}" style="text-decoration: none"><p style="font-family: 'Arial'; font-size:20px; border: 14px">{{$pub->conteudo->titulo}}</p></td>
@auth
<td><form method="get" action="/publicacao/{{$pub->id}}/delete">
    <button type="submit">Deletar</button>
</form></td>
<td><form method="get" action="/publicacao/{{$pub->id}}/edit">
    <button type="submit">Editar</button>
</form></td>
@endauth
</tr>
    @endforeach
</table>
        
    </body>
    @endsection
</html>
