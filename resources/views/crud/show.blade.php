@extends('layouts.app')



@section('content')

	<div class="continer">
		<a href="{{route('create')}}">
			<button class="btn btn-success">Add New friend</button>
		</a>
		<div class="row">
			<div class="col-md-4">
				<h1>Name: {{$findFriends->name}}</h1>	
		
				<h3>Occupation: {{$findFriends->occupation}}</h3>
			</div>
		</div>
		
		

	</div>
	
@stop