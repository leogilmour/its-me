@extends('layouts.layout')
@section('styles')
	<link href="/css/app.css" rel="stylesheet">	
	<link href="/css/home.css" rel="stylesheet">
@stop
@section('content')

<div class="title">
	<h1>Leo Gilmour</h1>
</div>

<div class="info">
	<ul>
		{{--  <li class="portfolio">  --}}
		<li>
			<p>London based web developer on <a href="https://www.linkedin.com/in/leo-gilmour">LinkedIn &#9755;</a></p>
			<!-- <ul class="dropdown"> -->
			<!-- </ul> -->
		</li>
		<li><a href="/learn-to-code">Learn to code &#9755;</a></li>
		<li><p>I tutor in Maths, Coding, and Science</p></li>
	</ul>
</div>

@stop