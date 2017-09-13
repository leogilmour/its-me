@extends('layouts.layout')
@section('styles')
     <link href="/css/halloween.css" rel="stylesheet"> 
@stop
@section('content')
<h1 id="title">WELCOME</h1>
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors.errors')
        <!-- New Task Form -->
        <form action="{{ url('/halloween/guests/' . $guest->character) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{ $guest->id }}">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="character" id="character" class="form-control" value="{{ $guest->character }}">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="guest" id="guest" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="diet" id="diet" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="driving" id="driving" class="form-control">
                </div>
                <div class="col-sm-6">
                <!--paintballing    -->
                      <input type="text" name="extra" id="extra" class="form-control"> 
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>




<!-- <p>{{ $guest->guest }}</p> -->
<p>{{ $guest->character }}</p>
<p>{{ $guest->image }}</p>
<!-- <p>{{ $guest->diet }}</p> -->
<p>{{ $guest->driving }}</p>
<p>{{ $guest->paid }}</p>
<p>{{ $guest->extra }}</p>
</form>
@stop