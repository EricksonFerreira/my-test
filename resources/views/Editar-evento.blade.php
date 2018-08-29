<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Evento</title>
</head>
<body>
		<ol>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ol>
	<h1>Editar Evento</h1>
	<a href="{{route('evento.index')}}">Index</a>
	<form action="{{route('evento.update', $evento->id)}}" method="POST">{{ csrf_field() }}{{method_field('PUT')}}
		<label>Nome: </label>
		 <input type="text" name="nome" value="{{old('nome')}}">
		<label>Email: </label>
		 <input type="text" name="email" value="{{old('email')}}">
		<label>Site: </label>
		 <input type="text" name="site" value="{{old('site')}}">
		<label>Descrição: </label>
		 <input type="text" name="descricao" value="{{old('descricao')}}">

		  <input type="reset" value="Limpar">
		  <input type="submit" value="Atualizar">
	</form>


</body>
</html>