@extends('layouts.layout')
@section('styles')
     <link href="/css/halloween.css" rel="stylesheet"> 
@stop
@section('content')
<h1 id="title">Welcome {{ $guest->character }}</h1>
    <div class="panel-body">

        @include('errors.errors')

        <form action="{{ url('/halloween/guest/' . $guest->character) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-groups">
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control hidden" value="{{ $guest->id }}">
                </div>
                <div class="col-sm-6">
                <p>Your alter ego</p>
                    <input type="text" name="guest" id="guest" class="form-control" placeholder="Your generic name" <?php echo !$guest->guest ?: 'disabled '; echo !($guest->guest) ?: 'value="' . $guest->guest . '"'; ?>>
                </div>
                <div class="col-sm-6">
                <p>Any dietary requirements?</p>
                    <input type="text" name="diet" id="diet" class="form-control" placeholder="I prefer fattened children" <?php echo !($guest->guest) ?: 'disabled '; echo !($guest->guest) ?: 'value="' . $guest->diet . '"'; ?>>
                </div>
                <p>If you're driving, where are you driving from? (leave blank if not driving)</p>
                <div class="col-sm-6">
                    <input type="text" name="driving" id="driving" class="form-control" placeholder="The death star" <?php echo !($guest->guest) ?: 'disabled '; echo !($guest->guest) ?: 'value="' . $guest->driving . '"'; ?>>
                </div>
                <div class="col-sm-6">
                <p>Any songs you'd die for?</p>
                    <input type="text" name="song" id="song" class="form-control" placeholder="Let's Do The Time Warp Again" <?php echo !($guest->guest) ?: 'disabled '; echo !($guest->guest) ?: 'value="' . $guest->diet . '"'; ?>>
                </div>
                <p>Would you be interested in hungover paintballing? (non committal, just gauging interest)</p>
                <div class="col-sm-6">
                      <input type="text" name="extra" id="extra" class="form-control" placeholder="Truly villainous" <?php echo !($guest->guest) ?: 'disabled '; echo !($guest->guest) ?: 'value="' . $guest->extra . '"'; ?>> 
                </div>
                <p>What's my dogs name? (Lazy spam bot detector!)</p>
                <div class="col-sm-6">
                      <input type="text" name="dog" id="dog" placeholder="Clue: Drunk" class="form-control"  <?php  echo !($guest->guest) ? '': 'class="hidden"'; echo !($guest->guest) ?: 'disabled '; ?>> 
                </div>
            </div>
<br>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" <?php echo !($guest->guest) ?: 'disabled'; ?>>
RSVP
                    </button>
                </div>
            </div>
        </form>
        <br>
        <h3>...or perhaps...</h3>
        <br>
        <a href="/halloween/guests/ive-paid" class="button">Back to Guest list</a>
    </div>
</form>
@stop