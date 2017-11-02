@extends('layouts.layout')
@section('styles')
    <link href="/css/home.css" rel="stylesheet">
@stop
@section('content')

@foreach ($parties as $party)
    <a href="/wildcard/admin/{{ $party->id }}">
        <p>{{ $party->name }}</p>
        <p>{{ $party->date }}</p>
    </a>
@endforeach

@stop