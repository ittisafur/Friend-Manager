@extends('layouts.app')



@section('content')

	
			
				<form action="{{route('user.update', $editFriends->id)}}" method="POST">
					@method('patch')
					@csrf
					<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="Enter email" value="{{$editFriends->name}}">
				    </div>

				    <div class="form-group">
					    <label for="gender">Gender</label>
					    <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter email" value="{{$editFriends->gender}}">
				    </div>

				    <div class="form-group">
					    <label for="age">Age</label>
					    <input type="number" class="form-control" id="age" name="age" placeholder="Enter email" value="{{$editFriends->age}}">
				    </div>

		    	    <div class="form-group">
		    	        <label class="mr-sm-2" for="inlineFormCustomSelect">Your friend's Country</label>
		                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="countries[]">
		                  <option selected>Country</option>
		                  @foreach($locations as $location)
		                  <option value="{{$editLocation->id}}">{{$editLocation->country}}</option>
		                  @endforeach
		                </select>
		    	    </div>

	    	        <div class="form-group">
	    	    	    <label for="state">State</label>
	    	    	    <input type="text" class="form-control" id="state" name="state" placeholder="Enter email" value="{{$editFriends->state}}">
	    	        </div>

    	            <div class="form-group">
    	        	    <label for="house_number">House Number</label>
    	        	    <input type="text" class="form-control" id="house_number" name="house_number" placeholder="Enter email" value="{{$editFriends->house_number}}">
    	            </div>

		    	    <div class="form-group">
		    	        <label class="mr-sm-2" for="inlineFormCustomSelect">Your friend's Education</label>
		                <select data-placeholder="Select a School" class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="educations[]">
		                  <option selected>School</option>
		                  @foreach($educations as $education)
		                  <option value="{{$editEducation->id}}">{{$editEducation->school}}</option>
		                  @endforeach
		                </select>
		    	    </div>

				    <div class="form-group">
					    <label for="occupation">Occupation</label>
					    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter email" value="{{$editFriends->occupation}}">
				    </div>

				    <div class="form-group">
					    <label for="bio">Bio</label>
					    <textarea class="form-control" name="bio" id="bio" rows="3">{{$editFriends->bio}}</textarea>
					</div>

					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			
	
@stop

{{-- So, i'll be talking about 2 controllers 
1. HomeController ( comes with make:auth )
2. FriendController
Under Friend Controller i wrote this code for creating a Friend
```
use App\Friend;
public function store()
    {
        Friend::create([
            'name' => request('name'),
            'gender' => request('gender'),
            'age' => request('age'),
            'address' => request('address'),
            'occupation' => request('occupation'),
            'bio' => request('bio'),
            'users_id' => auth()->user()->id
        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
        $editFriends = Friend::find($id);
        return view('crud.edit', compact('editFriends'));
    }
    public function update(Request $request, $id)
    {
        Friend::find($id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'address' => $request->address,
            'occupation' => $request->occupation,
            'bio' => $request->bio,
            'users_id' => auth()->user()->id
        ]);

        return redirect()->home();
    }

Now when i type in 'users_id' => auth()->user()->id in the update method it gives an error.

  --}}