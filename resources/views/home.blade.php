@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if(auth()->check())
                    You are logged in as {{auth()->user()->name}}
                    @endif
                    <p>
                      Create your friend list.
                      <ul>
                        <li>To select Address and Education. Add it up in the following table.</li>
                        <li>Then select it from the form while creating your Friend list.</li>
                      </ul>
                    </p>

                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                              <th scope="col">Friends List</th>
                              <th scope="col">Address List</th>
                              <th scope="col">Education List</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                              <th><a href="{{route('create')}}">Create Friends</a></th>
                              <td><a href="{{route('location.create')}}">Create Address</a></td>
                              <td><a href="{{route('education.create')}}">Create Education</a></td>
                            </tr>
                        </tbody>
                            
                    </table>
                    
                    @if(!empty($friends[0]))
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Age</th>
                              <th scope="col">Show</th>
                              <th scope="col">Edit</th>
                              <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        
                        @foreach($friends as $index=>$friend)
                        
                        <tbody>
                            <tr>
                              <th scope="row">{{++$index}}</th>
                              <td>{{$friend->name}}</td>
                              <td>{{$friend->gender}}</td>
                              <td>{{$friend->age}}</td>
                              <td><a href="{{route('user.show', $friend->id)}}"><i class="fas fa-eye"></i></a></td>
                              <td><a href="{{route('user.edit', $friend->id)}}"><i class="far fa-edit"></i></a></td>
                              <td>
                                
                                <form id="delete-form-{{$friend->id}}" action="{{route('user.delete',$friend->id)}}"  method="POST">
                                  {{csrf_field()}}
                                  {{method_field('DELETE')}}
                                  <button type="submit">
                                    <i class="far fa-trash-alt"></i>
                                  </button>
                                </form>
                                
                               </td>
                            </tr>
                        </tbody>
                        @endforeach
                        
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
