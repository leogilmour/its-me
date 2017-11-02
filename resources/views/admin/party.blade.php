@extends('layouts.layout')
@section('styles')
    <link href="/css/home.css" rel="stylesheet">
@stop
@section('content')

        <p>{{ $party->name }}</p>
        <p>{{ $party->date }}</p>
@foreach($guests as $guest)
    <p>{{ $guest->guest }}</p>
@endforeach

@stop