<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title','Default') | panel de administracion</title>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/trumbowyg/ui/trumbowyg.css')}}">
</head>
<body class="container">
	
	@include('admin.template.partials.nav')
	
	<section>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>
			<div class="panel-body">
				@include('flash::message')
				@include('admin.template.partials.errors')
				@yield('content')
			</div>
		</div>
		
	</section>
	<footer>
		Todos los derechos reservados &copy{{date('Y')}}
	</footer>
	<script type="text/javascript" src="{{asset('plugins/jquery/js/jquery-2.2.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/trumbowyg/trumbowyg.js')}}"></script>
	@yield('js')
</body>
</html>