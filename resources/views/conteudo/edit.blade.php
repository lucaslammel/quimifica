<h1>Editar o Conteúdo {{$con->id}}</h1>
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
<form action="/conteudo/{{$con->id}}" method="post">
	{{ csrf_field() }}
    {{ method_field('PUT') }}
	<p>Titulo:</p> <input type="text" name="titulo" value="{{$con->titulo}}"> <br>
	<p>Texto:</p>  <textarea type="text" name="descricao" rows="4" cols="50">{{$con->descricao}}</textarea>  <br>
	</select>
	<input type="submit" value="Salvar">