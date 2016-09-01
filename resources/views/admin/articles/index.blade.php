@extends('admin.template.main')
@section('title','Listado de Articulo')
@section('content')
<a href="{{route('admin.articles.create')}}" class="btn btn-info">Registrar</a>
<!-- Buscador de tags -->
	{!! Form::open(['route'=>'admin.articles.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
	<div class="input-group">
		{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Buscar Articulo..']) !!}
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	</div>
	{!! Form::close() !!}
	<hr>
<!-- Fin del Buscador de tags -->
<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Titulo</th>
		<th>Categoria</th>
		<th>User</th>
		<th>Accion</th>
	</tr>
	@foreach($articles as $article)
	<tr>
		<td>{{$article->id}}</td>
		<td>{{$article->title}}</td>
		<td>{{$article->category->name}}</td>
		<td>{{$article->user->name}}</td>
		<td>
			<a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.articles.destroy',$article->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a></td>
		</td>
	</tr>
	@endforeach
</table>
<div>
	{!! $articles->render() !!}
</div>
		
@endsection