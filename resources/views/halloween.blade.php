@extends('layouts.layout')
@section('styles')
	<link href="/css/halloween.css" rel="stylesheet"> 
@stop
@section('content')
@include('errors.errors')

<div class="invite intro">
	<h1>HALLOWE'EN</h1>  
	<h2>4th November 2017</h2>
	<h2>&#9884;</h2>
</div>
<hr>
<div class="invite">
	<h1 id="title">666TH<br>ANNUAL<br>INTERNATIONAL<br>VILLAIN-CON</h1>   
	<h3>Whether you’re a petty thief, a heinous henchman or looking for world domination don’t miss the ultimate super villain convention</h3>
	<h3>Your evilness is invited to attend the day and after party</h3>
	<h2>Programme</h2>
	<h3>Saturday 4th</h3>
	<ul>
		<li>
			<p>4pm: <em>THE</em> one and only supervillain challenge. Hilight of the day's conference and includes complimentary tea and biscuits. There are no good guys in this story...</p>
		</li>
		<li>
			<p>6pm: Dressing up - don't forget your deadliest dancing shoes</p>
		</li>
		<li>
			<p>7pm: Dangerous Drinks - accompanied by a kamikaze cocktail of explosions and weapons tests. Molotov cocktails optional.</p>
		</li>
		<li>
			<p>8pm: Devilish Dinner</p>
		</li>
		<li>
			<p>Xpm: Dancing Demons</p>
		</li>
	</ul>
	<h3>Sunday 5th</h3>
	<ul>
		<li>
			<p>Some form of breakfast</p>
		</li>
		<li>
			<p>Hungover paintballing</p>
			<p>Paintballing is midday - 4pm in nearby town of Buckingham (15min drive) and would be around £20. Subject to demand.</p>
		</li>
	</ul>
	<h3>Sleep and travel</h3>
	<ul>
		<li>
			<p>It is essential you bring a sleeping bag (...always available on amazon) and there will be floor space inside.</p>
			<p>Unless you sleep like the dead, highly recommend a tent or a car... especially if you don't like snoring or rooms infused with second hand booze.</p>
			<p>There is a pub hotel opposite called The Bell if you need good quality sleep.</p>
		</li>
		<li>
			<p>Trains to Milton Keynes are fastest - 35mins - from Euston. Slower train to Aylesbury from Marylebone.</p>
			<p>Cheap cabs: 01296 715 222 ...(There is also bus from Aylesbury if you fancy it).</p>
		</li>
	</ul>
</div>
<hr>
<div class="invite rsvp-options">
<h1>R.S.V.P.</h1>
	<h2>HELL YEAH</h2>
	<p>The correct choice. Instead of BYOB, I am collecting £10.</p>
	<p>Have your debit card ready and cough up here:</p>
	<a href="https://monzo.me/leonoragilmour/10.00?d=From:%20your%20name" class="button">MONZO</a>
	<p>Once I've received your payment, I will contact you with the unlocked guest list where you can choose your alias and fill out the RSVP form.</p>
	<p>Preview the guest list here:</p>
	<a href="/halloween/guests" class="button">GUESTS</a>
	<p><em>Note, only one guest per identity.</em></p>
	<hr>
	<h2>M.I.A.</h2>
	<p>Sorry you won't be able to make it. For ease of organising please fill out your alter ego and click this simple button</p>

	 <form action="{{ url('/halloween')}}" method="POST" class="form-horizontal"> 
		{{ csrf_field() }}
		<div class="form-groups">
			<p>Non-attendee name</p>
			<div class="col-sm-6">
				<input type="text" name="name" id="name" class="form-control" placeholder="Full name pls">
			</div>
			 <p>What's my dogs name? (Lazy spam bot detector!)</p> 
			<div class="col-sm-6">
					<input type="text" name="dog" id="dog" placeholder="Clue: Drunk" class="form-control"> 
			</div>
		</div>
		<!-- Add Task Button -->
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default">
					 I can't come. 
				</button>
			</div>
		</div>
	 </form> 
</div>
@stop