<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Leo Gilmour</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Ewert|Special+Elite" rel="stylesheet">

		<!-- Styles -->
		<style>
			html, body {
				background-color: #000;
				background-image: url(/images/leo-pard.jpg);
				background-size: cover;
				background-position: center;
				/*color: #ff2c71;*/
				/*color: #ff2846;*/
				margin: 0;
			}

			.full-height {
				height: 100vh;
			}

			.flex-center {
				justify-content: center;
			}

			.position-ref {
				position: relative;
			}

			.top-right {
				position: absolute;
				right: 10px;
				top: 18px;
			}

			.content {
				text-align: center;
			}

			.links > a {
				color: #636b6f;
				padding: 0 25px;
				font-size: 12px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
			}

			div.info {
				height: 80vh;
				width: 110vh;
				max-width: 90vw; 
				margin: auto; 
				/*background-color: black;*/
				background-image: url(/images/me-in-russia.jpg);
				background-size: cover;
				background-position: center;
				padding: 10px;
				box-shadow: 2px 2px 8px #4d4d4d;
			}


			p, a {
				font-family: 'Special Elite', serif;
				font-size: 25px;
				color: white;
				text-shadow: 1px 1px 4px #4d4d4d;
				width: 30vh;
				display: block;
				text-align: left;
				position:relative;
				z-index: 1;
				text-decoration: none;
			}

			a:hover {
				color: #ff2c71;
			}


			h1 {
				font-family: 'Ewert', cursive;
				text-shadow: 2px 2px 8px black; 
				margin-top: 0;
				margin-bottom: 5vh;
				font-size: 10vh;
				color: #de0b28;
			}

			img {
					position: absolute;
					bottom: 0;
					width: 70%;
					left: 15%;
			}

		</style>
	</head>

	<body>

		<div class="flex-center position-ref full-height">
			<!-- @if (Route::has('login'))
				<div class="top-right links">
					<a href="{{ url('/login') }}">Login</a>
					<a href="{{ url('/register') }}">Register</a>
				</div>
			@endif -->

			<div class="content">

				<div class="title m-b-md">
					<h1>Leo Gilmour</h1>
				</div>

				<div class="info">
					<p>London based web developer</p>
					<a href="https://www.linkedin.com/in/leo-gilmour">Here's my linkedin &#9755;</a>
					<p>I like teaching maths</p>
					<img src="/images/green-army-men.png">
				</div>
			<!-- 	<div class="footer">
					<p>email: leonoragilmour@sky.com</p>
				</div> -->
			</div>
		</div>
	</body>
</html>