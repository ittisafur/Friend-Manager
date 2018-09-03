@extends('layouts.app')

@section('content')

	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Locations</div>

	                <div class="card-body">
	                   
	                   <table class="table">
	                     <thead>
	                       <tr>
	                         <th scope="col">#</th>
	                         <th scope="col">Country</th>
	                         <th scope="col">Zip</th>
	                         <th scope="col">Edit</th>
	                         <th scope="col">Delete</th>
	                       </tr>
	                     </thead>
	                     
	                     @foreach($locations as $index=>$location)
	                     <tbody>
	                       <tr>
	                         <th scope="row">{{++$index}}</th>
	                         <td>{{$location->country}}</td>
	                         <td>{{$location->zip}}</td>
	                         <td><a href="{{route('location.edit', $location->id)}}"><i class="far fa-edit"></i></a></td>
	                         <td>
	                           
	                           <form id="delete-form-{{$location->id}}" action="{{route('location.destroy',$location->id)}}"  method="POST">
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
	                   
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@stop