<h1>Editar a Publicação {{$pub->id}}</h1>
<hr>
@if ($errors->any())
	<div class="container">
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>	
		</div>
	</div>
@endif
<form action="/publicacao/{{$pub->id}}" method="post">
	{{ csrf_field() }}
    {{ method_field('PUT') }}
	<p>Titulo:</p> <input type="text" name="titulo" value="{{$pub->titulo}}"> <br>
	<p>Texto:</p>  <textarea type="text" name="texto" rows="4" cols="50"></textarea>  <br>
	Conteúdo: <select name="conteudo_id" value="Selecione o conteúdo">
	<option value="">Selecione o conteúdo</option>
		@foreach($result as $row)
		<option value="{{$row->id}}">{{$row->titulo}}</option>
		@endforeach
	</select>
	<input type="submit" value="Salvar">