<h1>Formulario de Publicação</h1>
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
<form action="/publicacao" method="post">
	{{ csrf_field() }}
	Titulo: <input type="text" name="titulo"> <br>
	Texto:  <input type="text" name="texto">  <br>
	Conteúdo: <select name="conteudo_id">
	<option value="">Selecione o bagui</option>
		@foreach($result as $row)
		<option value="{{$row->id}}">{{$row->titulo}}</option>
		@endforeach
	</select>
	<input type="submit" value="Salvar">