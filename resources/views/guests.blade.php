@extends('layouts.layout')
@section('styles')
     <link href="/css/halloween.css" rel="stylesheet"> 
@stop
@section('content')
@include('errors.errors')

<h1 id="title">666TH ANNUAL SUPERVILLAIN CONVENTION</h1>
@if($paid == "ive-paid")
    <p>To attend please select your identity and fill out the form.</p>
    <p><em>Warning:</em> There are <?php echo count($guests); ?> to choose from...</p>
@endif
<div id="list">
	@foreach($guests as $guest)
    @if($paid == "ive-paid" && !$guest->guest) 
    <a href="/halloween/guest/{{ $guest->character }}">
    @endif
        @if($guest->guest)
        <div class="guest taken">
        @else 
        <div class="guest">
        @endif
            @if($guest->guest)
                <h2>{{ $guest->guest }}</h2>
                {{--  <h2 class="primary">{{ $guest->guest }}</h2>  --}}
                {{--  <h2 class="secondary">{{ $guest->character }}</h2>  --}}
            @else
                <h2>{{ $guest->character }}</h2>
            @endif
            <div class="image" style="background-image: url({{ $guest->image }});">
            @if($guest->driving)
                <p>Driving from {{ $guest->driving }}</p>
            @endif
            </div>
        </div>
    </a>
	@endforeach
</div>
@stop