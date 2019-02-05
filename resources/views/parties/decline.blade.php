@extends('layouts.layout')
@section('styles')
     <link href="/css/{{ $party->slug }}.css" rel="stylesheet"> 
@stop
@section('content')

<h2>Unfortunately,<br>I cannot attend</h2>
<h1 id="title">{{ $party->party }}</h1>

@if(session()->has('guest_name'))

    <p class="serif"><strong>We're sorry {{session()->get('guest_name')}} cannot attend and hope to see you at the next one!</strong></p>

@else

<div class="panel-body">
    @include('errors.errors')

    <form action="{{ Request::fullUrl() }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-groups">
            <div class="col-sm-6">
                <input type="text" name="party_id" id="party_id" class="form-control hidden" value="{{ $party->id }}">
            </div>
            <div class="col-sm-6">
                    <input type="text" name="reply" id="reply" class="form-control hidden" value=0>
            </div>
            <div class="col-sm-6">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your name" value="{{ old('name') }}">
            </div>
            <div class="col-sm-6">
                <input type="email" name="email" id="email" class="form-control" placeholder="Your email" value="{{ old('email') }}">
            </div>
            <div class="col-sm-6">
                    <input type="text" name="password" id="password" class="form-control" placeholder="Greek name for Cupid?" value="{{ old('password') }}">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit">
                    RSVP
                </button>
            </div>
        </div>
    </form>

    <hr class="styled">

    <a class="secondary" href="/parties/{{ $party->slug }}" class="button">Back to invite</a>
</div>

@endif
@stop