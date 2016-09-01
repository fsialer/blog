@extends('admin.template.main')
@section('title','Listado de Categoria')
@section('content')
	<a href="{{route('admin.categories.create')}}" class="btn btn-info">Registrar</a><hr>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</tr>
		@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td>	<a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.categories.destroy',$category->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a></td>
		</tr>
		@endforeach
	</table>
	<div>
		{!! $categories->render() !!}
	</div>

@endsection