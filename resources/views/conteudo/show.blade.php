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
                <h1>Título: {{$con->titulo}}</h1>
        </div>
            <p>{{$con->descricao}}</p>
            @foreach($pub as $pub)
<tr style="border: 1">
<td><a href="/publicacao/{{$pub->id}}" style="text-decoration: none"><p style="font-family: 'Arial'; font-size: 30px">{{$pub->titulo}}</p></td>

</tr>
    @endforeach
    </body>
</html>
