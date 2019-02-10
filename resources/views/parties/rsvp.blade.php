@extends('layouts.layout')
@section('styles')
     <link href="/css/{{ $party->slug }}.css" rel="stylesheet"> 
@stop
@section('content')
<h1 id="title">R.S.V.P.</h1>
<h2>{{ $party->party }}</h2>
    <div class="panel-body">

        @include('errors.errors')

        <form action="{{ Request::fullUrl() }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-groups">
                <div class="col-sm-6">
                    <input type="text" name="party_id" id="party_id" class="form-control hidden" value="{{ $party->id }}">
                </div>
                <div class="col-sm-6">
                        <input type="text" name="reply" id="reply" class="form-control hidden" value=1>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control{{ isset($guest->name) ? ' disabled' : '' }}" {{ isset($guest->name) ? 'disabled' : '' }} placeholder="Your name" value="{{ old('name') ?: ( isset($plus_one->name) ? $plus_one->name : '') }}">
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" id="email" class="form-control {{ isset($guest->name) ? 'hidden' : '' }}" placeholder="Your email" value="{{ old('email') }}">
                </div>
                <p>&</p>
                <div class="col-sm-6">
                    <input type="text" name="plus_one" id="plus_one" class="form-control{{ isset($guest->name) ? ' disabled' : '' }}" {{ isset($guest->name) ? 'disabled' : '' }} placeholder="Your plus one's name" value="{{ old('plus_one') ?: (isset($guest->name) ? $guest->name : '') }}">
                </div>
                <div class="col-sm-6">
                    <textarea name="fact" id="fact" class="form-control" placeholder="A mysterious fact on {{ isset($guest->name) ? $guest->name : 'your plus one' }}. Outrageous or strange facts work best.">{{ old('fact') }}</textarea>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="password" id="password" class="form-control" placeholder="Greek name for Cupid?" value="{{ old('password') }}">
                </div>
            </div>
<br>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit">
                        RSVP
                    </button>
                </div>
            </div>
        </form>
        <hr class="styled">
        {!! isset($guest->name) ? '' : '<a class="secondary" href="/parties/' . $party->slug . '" class="button">Back to invite</a>' !!}
    </div>
</form>
@stop