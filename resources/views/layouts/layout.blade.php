<!doctype html>
<html lang='en'>

<head>
	@include('includes.head')

	@yield('styles')
</head>

<body>
	<div class="container">
		

		<div id="main">
			@yield('content')
		</div>

		
	</div>
	<footer>
		{{-- this is driving me insane. --}}
		<!-- <script src="/js/app.js"></script> -->
		
		@yield('js')

		@yield('footer')
	</footer>
</body>

</html>