@extends('layouts.layout')
@section('styles')
     <link href="/css/learn.css" rel="stylesheet"> 
     <link href="/css/wildcard.css" rel="stylesheet"> 
@stop
@section('content')
<h2>{{ $party->date }}: {{ $party->party }}</h2>
<h3>Attendees</h3>
@foreach ($guests as $g)
    <div class="guest">
        <div class="id"><p>{{ $g['guest']->id }}</p></div>
        <div class="name"><p>{{ $g['guest']->name }} &</p></div>
        <div class="plus-one-id"><p>{{ $g['plus_one']->id }}</p></div>
        <div class="plus_one"><p>{{ $g['plus_one']->name }}</p></div>
        <div class="fact"><p>- {{ isset($g['fact']->cupid_fact) ? $g['fact']->cupid_fact : 'awaiting' }}</p></div>
    </div>
@endforeach
<h3>Absent</h3>
@foreach ($absent as $a)
    <div class="absent">
        <div class="id"><p>{{ $a->id }}</p></div>
        <div class="name"><p>{{ $a->name }}</p></div>
    </div>
@endforeach
@stop
