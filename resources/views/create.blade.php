@extends('layouts.app')

@section('content')
	<div class="container">
		<a href="{{route('location.create')}}"><button class="btn btn-success">Add Address</button></a>
		<a href="{{route('education.create')}}"><button class="btn btn-success">Add Education</button></a>

		<br>
		<br>

		<form action="{{route('create.store')}}" method="POST">
			@csrf
			<div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="Enter email">
		    </div>

		    <div class="form-group">
			    <label for="gender">Gender</label>
			    <input type="text" class="form-control" id="gender" name="gender" placeholder="Your friend's sex">
		    </div>

		    <div class="form-group">
			    <label for="age">Age</label>
			    <input type="number" class="form-control" id="age" name="age" placeholder="The age, maybe?">
		    </div>

    	    <div class="form-group">
    	        <label class="mr-sm-2" for="inlineFormCustomSelect">Your friend's Country</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="countries[]">
                  <option selected>Country</option>
                  @foreach($locations as $location)
                  <option value="{{$location->id}}">{{$location->country}}</option>
                  @endforeach
                </select>
    	    </div>

		    <div class="form-group">
			    <label for="state">State</label>
			    <input type="text" class="form-control" id="state" name="state" placeholder="Enter email">
		    </div>

		    <div class="form-group">
			    <label for="house_number">House Number</label>
			    <input type="text" class="form-control" id="house_number" name="house_number" placeholder="Enter email">
		    </div>

		    <div class="form-group">
		        <label class="mr-sm-2" for="inlineFormCustomSelect">Your friend's Education</label>
	            <select data-placeholder="Select a School" class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="educations[]">
	              <option selected>School</option>
	              @foreach($educations as $education)
	              <option value="{{$education->id}}">{{$education->school}}</option>
	              @endforeach
	            </select>
		    </div>

    	    

		    <div class="form-group">
			    <label for="occupation">Occupation</label>
			    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter email">
		    </div>

		    <div class="form-group">
			    <label for="bio">Bio</label>
			    <textarea class="form-control" name="bio" id="bio" rows="3"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@stop

