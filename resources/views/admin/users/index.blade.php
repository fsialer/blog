@extends('admin.template.main')
@section('title','Lista de Usuario')
@section('content')
	<a href="{{route('admin.users.create')}}" class="btn btn-info">Registrar</a>
	<hr>
  <table class="table table-striped">
  	<tr>
  		<th>Nombre completo</th>
  		<th>Correo electronico</th>
  		<th>Nivel</th>
  		<th>Accion</th>
  	</tr>
  	@foreach($users as $user)
  	<tr>
  		<td>{{$user->name}}</td>
  		<td>{{$user->email}}</td>
  		<td>
  			@if($user->type=="admin")
  			<span class="label label-danger ">{{$user->type}}</span>
  			@else
  				<span class="label label-primary ">{{$user->type}}</span>
  			@endif

  		</td>
  		<td>
  		<a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.users.destroy',$user->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>
  		</td>
  	</tr>
  	@endforeach
  	
  </table>
 
  	 {!! $users->render() !!}
  
 
@endsection