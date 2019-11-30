<h1>Formulario de Conteúdo</h1>
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
<form action="/conteudo" method="post">
	{{ csrf_field() }}
	Título: <input type="text" name="titulo"> <br>
	Descrição:  <input type="text" name="descricao">  <br>
	<option value="">Selecione o conteúdo</option>
		@foreach($result as $row)
		<option value="{{$row->id}}">{{$row->titulo}}</option>
		@endforeach
	</select>
	<input type="submit" value="Salvar">