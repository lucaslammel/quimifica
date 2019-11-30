<h1>Excluir registro</h1>

<form action="/publicacao/{{$publicacao->id}}/delete" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}

<h2>Você deseja realmente excluir a publicação {{$publicacao->id}}?</h2>
<input type="submit" value="Deletar">
