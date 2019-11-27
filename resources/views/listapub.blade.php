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
                <h1>Lista de Publicações</h1>
        </div>
            

<table border="0">
    @foreach($publicacoes as $pub)
<tr style="background-color: lightgrey">
<td><a href="/publicacao/{{$pub->id}}" style="text-decoration: none"><p style="font-family: 'Arial'; font-size: 30px">{{$pub->titulo}}</p></td>
<td><a href="/conteudo/{{$pub->conteudo->id}}" style="text-decoration: none"><p style="font-family: 'Arial'; font-size:20px; border: 20px">{{$pub->conteudo->titulo}}</p></td>
</tr>
    @endforeach
</table>
        
    </body>
</html>
