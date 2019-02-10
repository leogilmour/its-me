@extends('layouts.layout')
@section('styles')
     <link href="/css/{{ $party->slug }}.css" rel="stylesheet"> 
@stop
@section('content')
<h3>{{ $party->host }} invite you to</h3>
<h1>{{ $party->party }}</h1>
<h2>{{ $party->tagline }}</h2>
<p>on<br><em>{{ $party->date }}</em><br>at<br><em>{{ $party->time }}</em><br>in<br><em>{{ $party->city }}</em></p>
<p>{{ $party->dress_code }}</p>
<hr>
    <a href="/parties/{{ $party->slug }}/rsvp">Accept</a>
    <a class="secondary" href="/parties/{{ $party->slug }}/decline">Decline</a>
<p class="serif"><strong>R.S.V.P. before {{ $party->deadline }}</strong></p>
<hr class="styled">
<div class="serif details">{!! $party->description !!}</div>
@stop
