@extends('layouts.layout')
@section('styles')
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
			<p>London based web developer</p>
			<!-- <ul class="dropdown"> -->
			<!-- </ul> -->
		</li>
		<li><a href="https://www.linkedin.com/in/leo-gilmour">Here's my linkedin &#9755;</a></li>
		<li><p>I like teaching maths and coding</p></li>
	</ul>
</div>

@stop