@extends('layouts.app')

@section('content')
	<div class="container">

		<div class="back">
			<a href="{{route('home')}}"><button class="btn-primary btn">Home</button></a>
			<a href="{{route('education.index')}}"><button class="btn-primary btn">See All the Schools</button></a>
			<a href="{{route('location.create')}}"><button class="btn-success btn">Add Location</button></a>
		</div>

		<br>
		<br>

		<form action="{{route('education.store')}}" method="POST">
			@csrf
			<div class="form-group">
			    <label for="school">School*</label>
			    <input type="text" class="form-control" id="school" name="school" placeholder="Enter School Name">
		    </div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@stop