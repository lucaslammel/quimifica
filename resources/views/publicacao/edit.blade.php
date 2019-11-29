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
	Titulo: <input type="text" name="titulo" value="{{$pub->titulo}}"> <br>
	Texto:  <input type="text" name="texto" value="{{$pub->texto}}">  <br>
	Conteúdo: <select name="conteudo_id" value="Selecione o conteúdo">
	<option value="">Selecione o conteúdo</option>
		@foreach($result as $row)
		<option value="{{$row->id}}">{{$row->titulo}}</option>
		@endforeach
	</select>
	<input type="submit" value="Salvar">