@extends('layouts.app')

@section('content')
	<form action="{{route('location.update', $editLocation->id)}}" method="POST">
		@method('patch')
		@csrf
		<div class="form-group">
		    <label for="country">Country</label>
		    <input type="text" class="form-control" id="country" name="country" placeholder="Enter email" value="{{$editLocation->country}}">
	    </div>

	    <div class="form-group">
		    <label for="zip">Zip</label>
		    <input type="number" class="form-control" id="zip" name="zip" placeholder="Enter email" value="{{$editLocation->zip}}">
	    </div>

		<button type="submit" class="btn btn-primary">Update</button>
	</form>
@stop

