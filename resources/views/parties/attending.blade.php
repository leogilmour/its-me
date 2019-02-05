@extends('layouts.layout')
@section('styles')
    <link href="/css/{{ $party->slug }}.css" rel="stylesheet"> 
@stop
@section('content')
    @if(session()->has('guest_name'))
        <p class="serif">✨ Once this page refreshes, this information will disappear ✨</p>
        <h1 id="title">Thank you</h1>
        <h2>{{session()->get('guest_name')}} is attending</h2>
        <h2>{{ $party->party }}</h2>
        <hr>
        @if(session()->has('plus_one_link'))
            <p><strong>Important:</strong> Please send this link to your plus one so they can add a fact about you.</p>
            <input id="post-shortlink" value="{{ url(session()->get('plus_one_link')) }}">
            <button class="button" id="copy-button" data-clipboard-target="#post-shortlink">Copy</button>
        @endif
        <hr>
        <p>The address for the party is below. This message will only appear temporarily, so please make a note of it now</p>
        <p class="serif"><strong>
            {!! null !== session()->get('first_address') ? session()->get('first_address') . ',<br>': '' !!}
            {!! null !== session()->get('second_address') ? session()->get('second_address') . ',<br>': '' !!}
            {!! null !== session()->get('city') ? session()->get('city') . ',<br>': '' !!}
            {!! null !== session()->get('county') ? session()->get('county') . ',<br>': '' !!}
            {{ session()->get('postcode') }}
        </strong></p>
        <hr>
    @else
    <p class="serif"><strong>Oops. Something went wrong.</strong></p>
    @endif

    <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js">
    </script>
    <script>
    (function(){
        new Clipboard('#copy-button');
    })();
    </script>
@stop