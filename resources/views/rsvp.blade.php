@extends('layouts.layout')
@section('styles')
     <link href="/css/halloween.css" rel="stylesheet"> 
@stop
@section('content')
<h1 id="title">WELCOME</h1>
<div id="list">
<p>{{ $guest->character }}</p>
<p>{{ $guest->guest }}</p>
<p>{{ $guest->character }}</p>
<p>{{ $guest->image }}</p>
<p>{{ $guest->diet }}</p>
<p>{{ $guest->driving }}</p>
<p>{{ $guest->paid }}</p>
<p>{{ $guest->extra }}</p>
</div>
@stop