@extends('layouts.app')

@section('content')
	<form action="{{route('education.update', $editEducation->id)}}" method="POST">
		@method('patch')
		@csrf
		<div class="form-group">
		    <label for="school">School</label>
		    <input type="text" class="form-control" id="school" name="school" placeholder="Enter email" value="{{$editEducation->school}}">
	    </div>

		<button type="submit" class="btn btn-primary">Update</button>
	</form>
@stop

