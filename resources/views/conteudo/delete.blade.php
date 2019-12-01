<h1>Excluir registro</h1>

<form action="/conteudo/{{$conteudo->id}}/delete" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}

<h2>Você deseja realmente excluir o conteúdo {{$conteudo->id}}?</h2>
<input type="submit" value="Deletar">
