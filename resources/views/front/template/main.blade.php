<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title','Home') | Blog de Fernando</title>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/font-aewsome-4.6.3/css/font-awesome.min.css')}}">
</head>
<body class="container">
	
	<header>
		@include('front.template.partials.header')
	</header>
	
	<section class="container">		
		@yield('content')		
	</section>
	<footer>
		Todos los derechos reservados &copy{{date('Y')}}
		<div class="pull-right">Fernando Sialer</div>
	</footer>
	<script type="text/javascript" src="{{asset('plugins/jquery/js/jquery-2.2.3.js')}}"></script>
	
</body>
</html>