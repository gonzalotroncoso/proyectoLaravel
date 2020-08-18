<!DOCTYPE html>
<html>
<head>
	<title>@Yield('title','App')</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js" defer></script>
	
</head>
<body>	
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			
		</header>
		<main>
			@yield('content')
		</main class="py-4">
		<footer class="bg-white text-center py-3 shadow text-black-50">
			{{config('app.name')}} | Copyright @ {{date('Y')}}
		</footer>
	</div>
</body>
</html>