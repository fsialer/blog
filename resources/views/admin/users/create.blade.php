@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')
	@if(count($errors)>0)
	<div class="alert alert-danger" role="alert">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
	{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}
	<div class="form-group">
		{!! Form::label('name','Nombre') !!}
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'NOMBRE COMPLETO']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email','Corre Electronico') !!}
		{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@xxx.com']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('password','Contraseña') !!}
		{!! Form::password('password',['class'=>'form-control','placeholder'=>'***********']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('type','Tipo') !!}
		{!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','placeholder'=>'Seleccione un opcion']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
@endsection