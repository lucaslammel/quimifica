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
                <h1>Título: {{$pub->titulo}}</h1>
        </div>
            <h2>{{$pub->conteudo->titulo}}</h2>
            <p>{{$pub->texto}}</p>
        
    </body>
</html>
