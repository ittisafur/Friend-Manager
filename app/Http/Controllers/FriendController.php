<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Friend;
use App\Education;
use App\Location;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $educations = Education::all();
        $locations = Location::all();
        return view('create', compact('educations', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $friend = Friend::create([
            'name' => request('name'),
            'gender' => request('gender'),
            'age' => request('age'),
            'state' => request('state'),
            'house_number' => request('house_number'),
            'occupation' => request('occupation'),
            'bio' => request('bio'),
            'users_id' => auth()->user()->id
        ]);

        $friend->relStudies()->sync($request->educations);
        $friend->relAddress()->sync($request->countries);
        
        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findFriends = Friend::find($id);
        return view('crud.show', compact('findFriends'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editEducations = Education::all();
        $editLocations = Location::all();
        $editFriends = Friend::find($id);
        return view('crud.edit', compact('editFriends', 'editEducations', 'editLocations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $friend = Friend::find($id);
        $friend->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'state' => $request->state,
            'house_number' => $request->house_number,
            'occupation' => $request->occupation,
            'bio' => $request->bio,
            'users_id' => auth()->user()->id
        ]);

        $friend->relStudies()->sync($request->educations);
        $friend->relAddress()->sync($request->countries);

        return redirect()->home();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Friend::find($id)->delete();
        return redirect()->back();
    }
}
