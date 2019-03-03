<!doctype html>
<html lang='en'>

<head>
	@include('includes.head')

	@yield('styles')
    <link href="/css/base.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		

		<div id="main">
			@yield('content')
	</div>

		
	</div>
	<footer>
		<!-- hello -->
		<!-- <script src="/js/app.js"></script> -->
		
		@yield('js')

		@include('includes.footer')
	</footer>
</body>

</html>