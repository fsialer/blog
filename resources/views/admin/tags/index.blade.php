@extends('admin.template.main')
@section('title','Listado de Tags') 
@section('content')
<a href="{{route('admin.tags.create')}}" class="btn btn-info">Registrar</a>
<!-- Buscador de tags -->
	{!! Form::open(['route'=>'admin.tags.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
	<div class="input-group">
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar Tag..']) !!}
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	</div>
	{!! Form::close() !!}
	<hr>
<!-- Fin del Buscador de tags -->
<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Accion</th>
	</tr>
	@foreach($tags as $tag)
	<tr>
		<td>{{$tag->id}}</td>
		<td>{{$tag->name}}</td>
		<td>
			<a href="{{route('admin.tags.edit',$tag->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.tags.destroy',$tag->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>

		</td>
	</tr>
	@endforeach
</table>
<div>
	{!! $tags->render() !!}
</div>
@endsection