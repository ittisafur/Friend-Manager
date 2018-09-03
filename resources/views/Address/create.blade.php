@extends('layouts.app')

@section('content')
	<div class="container">

		<div class="back">
			<a href="{{route('home')}}"><button class="btn-primary btn">Home</button></a>
			<a href="{{route('location.index')}}"><button class="btn-primary btn">See all Locations</button></a>
			<a href="{{route('education.create')}}"><button class="btn-success btn">Add Schools</button></a>
		</div>

		<br>
		<br>

		<form action="{{route('location.store')}}" method="POST">
			@csrf
			<div class="form-group">
			    <label for="country">Country</label>
			    <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country">
		    </div>

		    <div class="form-group">
			    <label for="zip">Zip Code</label>
			    <input type="number" class="form-control" id="zip" name="zip" placeholder="The zip code, maybe?">
		    </div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@stop