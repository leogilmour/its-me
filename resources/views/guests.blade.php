@extends('layouts.layout')
@section('styles')
     <link href="/css/halloween.css" rel="stylesheet"> 
@stop
@section('content')
<h1 id="title">666TH ANNUAL SUPERVILLAIN CONVENTION</h1>
<p>To attend please choose one</p>
<div id="list">
	@foreach($guests as $guest)
    <a href="/halloween/guests/{{ $guest->character }}">
        <div class="guest" style="background-image: url({{ $guest->image }});">
            <h2>{{ $guest->character }}</h2>
        </div>
    </a>
	@endforeach
</div>
@stop