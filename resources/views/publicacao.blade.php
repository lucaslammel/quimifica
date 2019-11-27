<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QuimIFica</title>

        <!-- Fonts -->

        <!-- Styles -->
            </head>
    <body>
        <div class="flex-center position-ref full-height">
                <h1>Conteúdo: {{$pub->conteudo->titulo}}</h1>
        </div>
            <!--<h2>{{$pub->titulo}}</h2>
            <p>{{$pub->id}}</p>
            <p>{{$pub->texto}}</p>-->

<table border="0">
<tr style="background-color: lightgrey">
<td><p style="font-family: 'Arial'; font-size: 30px">{{$pub->titulo}}</p></td>
<td><a href="/conteudo/{{$pub->conteudo->id}}" style="text-decoration: none"><p style="font-family: 'Arial'; font-size:20px; border: 20px">{{$pub->conteudo->titulo}}</p></td>
</tr>
<tr>
<td>linha 2, célula 1</td>
<td>linha 2, célula 2</td>
</tr>
</table>
        
    </body>
</html>
